<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminCategoryInterface;
use App\Http\Traits\category\CategoryTrait;
use App\Http\Traits\handleImage\ImageTrait;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCategoryRepository implements AdminCategoryInterface
{
    const PATH = 'category';
    private $categoryModel;
    use CategoryTrait, ImageTrait;
    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
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
        $imageName = $this->uploadImage($request->image, self::PATH);
        $this->categoryModel::create([
            'title' => $request->title,
            'image' => $imageName
        ]);
        Alert::toast('Category Created Successfully', 'success');
        return redirect(route('admin.category.index'));
    }

    public function delete($request): RedirectResponse
    {
        $category = $this->findCategoryById($request->id);
        public_path(unlink($category->image));
        $category->delete();
        Alert::toast('Category Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = $this->findCategoryById($id);
        if ($category) {
            return view('admin.category.edit', compact('category'));
        }
        Alert::toast('Category Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $category = $this->findCategoryById($request->id);
        if ($request->image) {
            $imageName = $this->uploadImage($request->image, self::PATH, $category->image);
        }
        $category->update([
            'title' => $request->title,
            'image' => $imageName ?? $category->getRawOriginal('image')
        ]);
        Alert::toast('Category Updated Successfully', 'success');
        return redirect(route('admin.category.index'));
    }
}
