<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminProjectInterface;
use App\Http\Traits\project\ProjectTrait;
use App\Models\Project;

class AdminProjectRepository implements AdminProjectInterface
{
    private $project;
    use ProjectTrait;
    public function __construct(Project $project)
    {
        $this->project = $project;
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
        $imageName = $this->uploadImage($request->image);
        $this->project::create([
            'title' => $request->title,
            'image' => $imageName
        ]);
        return redirect(route('admin.project.index'));
    }

    public function delete($request)
    {
        $project = $this->findProjectById($request->id);
        public_path(unlink($project->image));
        $project->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $project = $this->findProjectById($request->id);
        return view('admin.project.edit', compact('project'));
    }

    public function update($request)
    {
        $project = $this->findProjectById($request->id);
        $imageName = $this->uploadImage($request->image, $project->image);
        $project->update([
            'title' => $request->title,
            'image' => $imageName
        ]);
        return redirect(route('admin.project.index'));
    }
}
