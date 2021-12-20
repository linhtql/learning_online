<?php

namespace App\Http\Controllers;

use App\Http\Services\Course\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $courseService;


    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function user_detail()
    {
        $id_user = Auth::user()->id;
        return view('home.user-detail', [
            'title' => 'Thông tin tài khoản',
            'courseBuyed' => $this->courseService->getCourseBuyed($id_user)
        ]);
    }
}
