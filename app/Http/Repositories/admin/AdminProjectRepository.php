<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminProjectInterface;
use App\Http\Traits\handleImage\ImageTrait;
use App\Http\Traits\project\ProjectTrait;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProjectRepository implements AdminProjectInterface
{
    const PATH = 'project';
    private $projectModel;
    use ProjectTrait, ImageTrait;
    public function __construct(Project $project)
    {
        $this->projectModel = $project;
    }

    public function index()
    {
        $projects = $this->getAllProjectsData();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function insert($request)
    {
        $imageName = $this->uploadImage($request->image, self::PATH);
        $this->projectModel::create([
            'title' => $request->title,
            'image' => $imageName
        ]);
        Alert::toast('Project Created Successfully', 'success');
        return redirect(route('admin.project.index'));
    }

    public function delete($request): RedirectResponse
    {
        $project = $this->findProjectById($request->id);
        public_path(unlink($project->image));
        $project->delete();
        Alert::toast('Project Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $project = $this->findProjectById($id);
        if ($project) {
            return view('admin.project.edit', compact('project'));
        }
        Alert::toast('Project Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $project = $this->findProjectById($request->id);
        if ($request->image) {
            $imageName = $this->uploadImage($request->image, self::PATH, $project->image);
        }
        $project->update([
            'title' => $request->title,
            'image' => $imageName ?? $project->getRawOriginal('image')
        ]);
        Alert::toast('Project Updated Successfully', 'success');
        return redirect(route('admin.project.index'));
    }
}
