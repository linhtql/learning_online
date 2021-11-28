<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseFormRequest;
use App\Http\Services\Course\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.add', [
            'title' => 'Thêm khoá học',
            'categories' => $this->courseService->getCategory()      
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {
        $this->courseService->store($request);
        return redirect()->back();    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.course.list',[
            'title' => 'Danh sách các khoá học',
            'courses' => $this->courseService->getCourse()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit', [
            'title' => 'Sửa khoá học ' . $course->name,
            'course' => $course,
            'categories' => $this->courseService->getCategory()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course, Request $request)
    {
        $res = $this->courseService->update($course, $request);
        if ($res)
        {
            return redirect()->route('show-course');
        }

        return redirect()->back()->with('error', 'Hình như có lỗi !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $res = $this->courseService->destroy($req);
        
        if($res)
        {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công khoá học !'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
