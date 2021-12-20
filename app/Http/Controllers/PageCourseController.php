<?php

namespace App\Http\Controllers;

use App\Http\Services\Course\CourseService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageCourseController extends Controller
{
    //
    protected $courseService;


    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }
    public function index($id_category)
    {
        return view('home.course-list', [
            'title' => "Tất cả khoá học",
            'category' => $this->courseService->getCategory(),
            'courseList' => $this->courseService->getCourseByID($id_category)
        ]);
    }

    public function course_detail($id)
    {

        return view('home.course-detail', [
            'title' => 'Khoá học',
            'courseDetail' => $this->courseService->getCourseDetail($id),
            'courseRelated' => $this->courseService->getCourseRelated(),
        ]);
    }

    public function mycourse()
    {
        if (Auth::user() == null) {
            return view('home.mycourse-none', [
                'title' => 'Khoá học của tôi'
            ]);
        } else {
            $id_user = Auth::user()->id;
            return view('home.mycourse', [
                'title' => 'Khoá học của tôi',
                'courseBuyed' => $this->courseService->getCourseBuyed($id_user)
            ]);
        }
    }

    public function course_study($id_course)
    {
        return view('home.course-study', [
            'title' => 'Học tập',
            'course' => $this->courseService->getStudy($id_course)
        ]);
    }
}
