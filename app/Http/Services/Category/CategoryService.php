<?php

namespace App\Http\Services\Category;

use App\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class CategoryService
{
    public function create($req)
    {
        try {
            Category::create([
                'name' => (string) $req->input('name'),
                'excerpt' => (string) $req->input('excerpt'),
                'description' => (string) $req->input('description'),
                'active' => (int) $req->input('active'),
                'slug' => Str::slug($req->input('name'), '-'),
            ]);

            Session::flash('success', 'Thêm môn học thành công!');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function getAll()
    {
        return Category::orderbyDesc('id')->get();
    }

    public function destroy($req)
    {
        $id = (int) $req->input('id');
        // Kiểm tra danh mục có tồn tại
        $category = Category::where('id', $id)->first();
        if ($category) {
            return Category::where('id', $id)->delete();
        }

        return false;
    }

    public function update($category, $req):bool
    {
        $category->fill($req->input());
        $category->save();

        Session::flash('success', 'Cập nhật thông tin danh mục thành công!');

        return true;
    }

    public function getBySlug($slug)
    {
        return Category::where('slug', $slug)->first();
    }
}
