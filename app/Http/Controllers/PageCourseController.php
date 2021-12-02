<?php

namespace App\Http\Controllers;

use App\Http\Services\Course\CourseService;
use Illuminate\Http\Request;

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
            'courseRelated' => $this->courseService->getCourseRelated()
        ]);
    }

    public function mycourse()
    {
        return view('home.mycourse', [
            'title' => 'Khoá học của tôi'
        ]);
    }

    public function course_study()
    {
        return view('home.course-study', [
            'title' => 'Học tập'
        ]);
    }
}
