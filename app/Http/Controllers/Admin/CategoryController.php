<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function create()
    {
        return view('admin.category.add', [
            'title' => 'Thêm danh mục'
        ]);
    }

    public function store(CategoryFormRequest $req)
    {
        $this->categoryService->create($req);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.category.list', [
            'title' => 'Danh mục khoá học',
            'categories' => $this->categoryService->getAll()
        ]);
    }

    public function destroy(Request $req)
    {
        $res = $this->categoryService->destroy($req);

        if($res){
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function show(Category $category)
    {
        return view('admin.category.edit', [
            'title' => 'Danh mục khoá học '.$category->name,
            'category' => $category
        ]);
    }

    public function update(Category $category, CategoryFormRequest $req)
    {
        $this->categoryService->update($category, $req);

        return redirect()->route('show-category');
    }
}
