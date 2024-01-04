<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminUserInterface;
use App\Http\Requests\admin\user\CreateUserRequest;
use App\Http\Requests\admin\user\UpdateUserRequest;

class AdminUserController extends Controller
{
    private $userInterface;
    public function __construct(AdminUserInterface $interface)
    {
        $this->userInterface = $interface;
    }

    public function index()
    {
        return $this->userInterface->index();
    }

    public function create()
    {
        return $this->userInterface->create();
    }

    public function insert(CreateUserRequest $request)
    {
        return $this->userInterface->insert($request);
    }

    public function delete($id)
    {
        return $this->userInterface->delete($id);
    }

    public function edit($id)
    {
        return $this->userInterface->edit($id);
    }

    public function update(UpdateUserRequest $request)
    {
        return $this->userInterface->update($request);
    }
}
