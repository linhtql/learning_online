<?php

namespace App\Http\Controllers;

use App\Http\Services\Course\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        return view('home', [
            'title' => 'Học trực tuyến',
            'courseSelling' => $this->courseService->getCourseSelling()

        ]);
    }

    public function contact()
    {
        return view('home.contact', [
            'title' => 'Liên hệ'
        ]);
    }
}
