<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminHomeInterface;
use App\Http\Requests\admin\user\UpdateUserRequest;

class AdminHomeController extends Controller
{
    private $homeInterface;
    public function __construct(AdminHomeInterface $interface)
    {
        $this->homeInterface = $interface;
    }

    public function index()
    {
        return $this->homeInterface->index();
    }

    public function edit()
    {
        return $this->homeInterface->edit();
    }

    public function update(UpdateUserRequest $request)
    {
        return $this->homeInterface->update($request);
    }
}
