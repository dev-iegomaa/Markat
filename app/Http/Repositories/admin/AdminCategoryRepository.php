<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminCategoryInterface;
use App\Http\Traits\category\CategoryTrait;
use App\Models\Category;

class AdminCategoryRepository implements AdminCategoryInterface
{
    private $category;
    use CategoryTrait;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->getAllCategoriesData();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function insert($request)
    {
        $imageName = $this->uploadImage($request->image);
        $this->category::create([
            'title' => $request->title,
            'image' => $imageName
        ]);
        return redirect(route('admin.category.index'));
    }

    public function delete($request)
    {
        $category = $this->findCategoryById($request->id);
        public_path(unlink($category->image));
        $category->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $category = $this->findCategoryById($request->id);
        return view('admin.category.edit', compact('category'));
    }

    public function update($request)
    {
        $category = $this->findCategoryById($request->id);
        $imageName = $this->uploadImage($request->image, $category->image);
        $category->update([
            'title' => $request->title,
            'image' => $imageName
        ]);
        return redirect(route('admin.category.index'));
    }
}
