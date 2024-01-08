<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminSkillInterface;
use App\Http\Requests\admin\skill\CreateSkillRequest;
use App\Http\Requests\admin\skill\DeleteSkillRequest;
use App\Http\Requests\admin\skill\UpdateSkillRequest;

class AdminSkillController extends Controller
{
    private $skillInterface;
    public function __construct(AdminSkillInterface $interface)
    {
        $this->skillInterface = $interface;
    }

    public function index()
    {
        return $this->skillInterface->index();
    }

    public function create()
    {
        return $this->skillInterface->create();
    }

    public function insert(CreateSkillRequest $request)
    {
        return $this->skillInterface->insert($request);
    }

    public function delete(DeleteSkillRequest $request)
    {
        return $this->skillInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->skillInterface->edit($id);
    }

    public function update(UpdateSkillRequest $request)
    {
        return $this->skillInterface->update($request);
    }
}
