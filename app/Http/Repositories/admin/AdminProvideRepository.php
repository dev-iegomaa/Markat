<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminProvideInterface;
use App\Http\Traits\category\CategoryTrait;
use App\Http\Traits\handleImage\ImageTrait;
use App\Http\Traits\provide\ProvideTrait;
use App\Models\Category;
use App\Models\Provide;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProvideRepository implements AdminProvideInterface
{
    const PATH = 'provide';
    private $categoryModel;
    private $provideModel;
    use CategoryTrait, ProvideTrait, ImageTrait;
    public function __construct(Category $category, Provide $provide)
    {
        $this->provideModel = $provide;
        $this->categoryModel = $category;
    }

    public function index()
    {
        $provides = $this->getAllProvidesData();
        return view('admin.provide.index', compact('provides'));
    }

    public function create()
    {
        $categories = $this->getAllCategoriesData();
        return view('admin.provide.create', compact('categories'));
    }

    public function insert($request)
    {
        $image = $this->uploadImage($request->image, self::PATH);
        $this->provideModel::create([
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'image' => $image,
            'category_id' => $request->category_id
        ]);
        Alert::toast('Provide Created Successfully', 'success');
        return redirect(route('admin.provide.index'));
    }

    public function delete($request): RedirectResponse
    {
        $provide = $this->findProvideById($request->id);
        public_path(unlink($provide->image));
        $provide->delete();
        Alert::toast('Provide Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $provide = $this->findProvideById($id);
        if ($provide) {
            $categories = $this->getAllCategoriesData();
            return view('admin.provide.edit', compact('provide', 'categories'));
        }
        Alert::toast('Provide Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $provide = $this->findProvideById($request->id);
        if ($request->image) {
            $image = $this->uploadImage($request->image, self::PATH, $provide->image);
        }

        $provide->update([
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'image' => $image ?? $provide->getRawOriginal('image'),
            'category_id' => $request->category_id
        ]);
        Alert::toast('Provide Updated Successfully', 'success');
        return redirect(route('admin.provide.index'));
    }
}
