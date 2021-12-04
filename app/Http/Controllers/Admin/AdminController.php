<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Course\CourseService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }
    public function index(Request $req)
    {

        return view('admin.home',[
            'title' => 'Admin homepage',
            'data'  => $this->courseService->getCourseNum()
        ]);
    }
}
