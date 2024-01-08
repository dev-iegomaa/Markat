<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminProvideInterface;
use App\Http\Requests\admin\provide\CreateProvideRequest;
use App\Http\Requests\admin\provide\DeleteProvideRequest;
use App\Http\Requests\admin\provide\UpdateProvideRequest;

class AdminProvideController extends Controller
{
    private $provideInterface;
    public function __construct(AdminProvideInterface $interface)
    {
        $this->provideInterface = $interface;
    }

    public function index()
    {
        return $this->provideInterface->index();
    }

    public function create()
    {
        return $this->provideInterface->create();
    }

    public function insert(CreateProvideRequest $request)
    {
        return $this->provideInterface->insert($request);
    }

    public function delete(DeleteProvideRequest $request)
    {
        return $this->provideInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->provideInterface->edit($id);
    }

    public function update(UpdateProvideRequest $request)
    {
        return $this->provideInterface->update($request);
    }
}
