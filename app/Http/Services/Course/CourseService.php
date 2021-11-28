<?php

namespace App\Http\Services\Course;

use App\Category;
use App\Course;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CourseService
{
    public function getCategory()
    {
        return Category::where('active', 1)->get();
    }

    private function isPrice($request)
    {
        if ($request->input('price') != 0 && $request->input('price_sale') != 0
        && $request->input('price_sale') >= $request->input('price') ){
            Session::flash('error', 'Giảm giá thế thì lời đâu ra :( !');
            return false;
        }

        if ($request->input('price') == 0 && $request->input('price_sale') > 0){
            Session::flash('error', 'Chưa có giá gốc bạn ơi !');
            return false;
        }

        return true;
    }
    public function store($request)
    {
        $isOk = $this->isPrice($request);
        
        if ($isOk === false) {
            return false;
        }

        try{
            Course::create([
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name'), '-'),
                'active' => $request->input('active'),
                'id_category' => $request->input('id_category'),
                'excerpt' => $request->input('excerpt'),
                'price' => $request->input('price'),
                'price_sale' => $request->input('price_sale'),
                'description' => $request->input('description'),
                'thumb' => $request->input('thumb')
            ]);

            Session::flash('success', 'Thêm khoá học thành công !');
            return true;
        } catch (\Exception $err){
            Session::flash('error', 'Thêm khoá học lỗi, mã lỗi: ' . $err->getMessage());
            return false;
        }

        return false;
    }

    public function getCourse()
    {
        return Course::with('category')
                     ->where('active', 1)
                     ->orderByDesc('id')->get();
    }

    public function update($course, $request)
    {
        $course->fill($request->input());
        $course->save();

        Session::flash('success', 'Cập nhật thông tin danh mục thành công!');

        return true;
    }

    public function destroy($req)
    {
        $course = Course::where('id', $req->input('id'))->first();

        if(!$course){
            Session::flash('error', 'Xoá lỗi, vui lòng kiểm tra lại !');

            return false;
        }

        return Course::where('id', $req->input('id'))->delete();
    }
}