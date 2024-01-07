<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminProjectInterface;
use App\Http\Requests\admin\project\DeleteProjectRequest;
use App\Http\Requests\admin\project\CreateProjectRequest;
use App\Http\Requests\admin\project\UpdateProjectRequest;

class AdminProjectController extends Controller
{
    private $projectInterface;
    public function __construct(AdminProjectInterface $interface)
    {
        $this->projectInterface = $interface;
    }

    public function index()
    {
        return $this->projectInterface->index();
    }

    public function create()
    {
        return $this->projectInterface->create();
    }

    public function insert(CreateProjectRequest $request)
    {
        return $this->projectInterface->insert($request);
    }

    public function delete(DeleteProjectRequest $request)
    {
        return $this->projectInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->projectInterface->edit($id);
    }

    public function update(UpdateProjectRequest $request)
    {
        return $this->projectInterface->update($request);
    }
}
