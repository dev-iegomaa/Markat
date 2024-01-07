<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminAboutInterface;
use App\Http\Traits\about\AboutTrait;
use App\Http\Traits\handleImage\ImageTrait;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutRepository implements AdminAboutInterface
{
    const PATH = 'about';
    private $aboutModel;
    use AboutTrait, ImageTrait;
    public function __construct(About $about)
    {
        $this->aboutModel = $about;
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
        $imageName = $this->uploadImage($request->image, self::PATH);
        $this->aboutModel::create([
            'paragraph' => $request->paragraph,
            'image' => $imageName
        ]);
        Alert::toast('About Created Successfully', 'success');
        return redirect(route('admin.about.index'));
    }

    public function delete($request): RedirectResponse
    {
        $about = $this->findAboutById($request->id);
        public_path(unlink($about->image));
        $about->delete();
        Alert::toast('About Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $about = $this->findAboutById($id);
        if ($about) {
            return view('admin.about.edit', compact('about'));
        }
        Alert::toast('About Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $about = $this->findAboutById($request->id);
        if ($request->image) {
            $imageName = $this->uploadImage($request->image, self::PATH, $about->image);
        }
        $about->update([
            'paragraph' => $request->paragraph,
            'image' => $imageName ?? $about->getRawOriginal('image')
        ]);
        Alert::toast('About Updated Successfully', 'success');
        return redirect(route('admin.about.index'));
    }
}
