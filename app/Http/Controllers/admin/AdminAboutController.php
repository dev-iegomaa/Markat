<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminAboutInterface;
use App\Http\Requests\admin\about\DeleteAboutRequest;
use App\Http\Requests\admin\about\CreateAboutRequest;
use App\Http\Requests\admin\about\UpdateAboutRequest;

class AdminAboutController extends Controller
{
    private $aboutInterface;
    public function __construct(AdminAboutInterface $interface)
    {
        $this->aboutInterface = $interface;
    }

    public function index()
    {
        return $this->aboutInterface->index();
    }

    public function create()
    {
        return $this->aboutInterface->create();
    }

    public function insert(CreateAboutRequest $request)
    {
        return $this->aboutInterface->insert($request);
    }

    public function delete(DeleteAboutRequest $request)
    {
        return $this->aboutInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->aboutInterface->edit($id);
    }

    public function update(UpdateAboutRequest $request)
    {
        return $this->aboutInterface->update($request);
    }
}
