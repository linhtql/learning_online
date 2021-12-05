<?php

namespace App\Http\Services\Course;

use App\Category;
use App\Course;
use App\Enroll;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        if (
            $request->input('price') != 0 && $request->input('price_sale') != 0
            && $request->input('price_sale') >= $request->input('price')
        ) {
            Session::flash('error', 'Giảm giá thế thì lời đâu ra :( !');
            return false;
        }

        if ($request->input('price') == 0 && $request->input('price_sale') > 0) {
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

        try {
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
        } catch (\Exception $err) {
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
    //khoa hoc theo id
    public function getCourseByID($id_category)
    {
        return Course::with('category')
            ->where('active', 1)
            ->where('id_category', $id_category)
            ->orderByDesc('id')->paginate(6);
    }
    //danh sach cac khoa hoc ban chay
    public function getCourseSelling()
    {
        return Course::with('category')
            ->where('active', 1)
            ->orderByDesc('id')->paginate(6);
    }
    //lay chi tiet khoa hoc
    public function getCourseDetail($id)
    {
        return Course::with('category')
            ->where('active', 1)
            ->where('id', $id)
            ->get();
    }
    //lay cac khoa hoc lien quan
    public function getCourseRelated()
    {
        return Course::with('category')
            ->where('active', 1)
            ->orderByDesc('id')
            ->paginate(2);
    }

    //cac khoa hoc da mua
    public function getCourseBuyed($id_user)
    {
        return Enroll::with('user', 'course')
            ->where('id_user', $id_user)
            ->orderByDesc('id')->paginate(6);
    }

    // chi tiet khoa hoc
    public function getStudy($id_course)
    {
        return Course::with('category')
            ->where('id', $id_course)
            ->get();
    }

    public function update($course, $request)
    {
        if ($course->name != $request->input('name')) {
            $course->slug = Str::slug($request->input('name'));
        }

        $course->name = $request->input('name');
        $course->active = $request->input('active');
        $course->id_category = $request->input('id_category');
        $course->price = $request->input('price');
        $course->price_sale = $request->input('price_sale');
        $course->excerpt = $request->input('excerpt');
        $course->thumb = $request->input('thumb');
        $course->description = $request->input('description');

        $course->save();

        Session::flash('success', 'Cập nhật thông tin danh mục thành công!');

        return true;
    }

    public function destroy($req)
    {
        $course = Course::where('id', $req->input('id'))->first();

        if (!$course) {
            Session::flash('error', 'Xoá lỗi, vui lòng kiểm tra lại !');

            return false;
        }

        return Course::where('id', $req->input('id'))->delete();
    }

    public function getCourseNum()
    {
        $users = Course::select(DB::raw("COUNT(*) as count"))
      ->whereYear('created_at', date("Y"))
      ->groupBy(DB::raw("Month(created_at)"))
      ->pluck('count');

    $months = Course::select(DB::raw("Month(created_at) as month"))
      ->whereYear('created_at', date("Y"))
      ->groupBy(DB::raw("Month(created_at)"))
      ->pluck('month');

    $data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    foreach ($months as $key => $month) {
      --$month;
      $data[$month] = $users[$key];
    }

    return $data;
    }
}
