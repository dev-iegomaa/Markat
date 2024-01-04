<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminAboutInterface;
use App\Http\Traits\about\AboutTrait;
use App\Models\About;

class AdminAboutRepository implements AdminAboutInterface
{
    private $about;
    use AboutTrait;
    public function __construct(About $about)
    {
        $this->about = $about;
    }

    public function index()
    {
        $abouts = $this->getAllAboutsData();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function insert($request)
    {
        $imageName = $this->uploadImage($request->image);
        $this->about::create([
            'paragraph' => $request->paragraph,
            'image' => $imageName
        ]);
        return redirect(route('admin.about.index'));
    }

    public function delete($request)
    {
        $about = $this->findAboutById($request->id);
        public_path(unlink($about->image));
        $about->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $about = $this->findAboutById($request->id);
        return view('admin.about.edit', compact('about'));
    }

    public function update($request)
    {
        $about = $this->findAboutById($request->id);
        $imageName = $this->uploadImage($request->image, $about->image);
        $about->update([
            'paragraph' => $request->paragraph,
            'image' => $imageName
        ]);
        return redirect(route('admin.about.index'));
    }
}
