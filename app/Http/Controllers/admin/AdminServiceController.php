<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminServiceInterface;
use App\Http\Requests\admin\service\CheckIdServiceRequest;
use App\Http\Requests\admin\service\CreateServiceRequest;
use App\Http\Requests\admin\service\UpdateServiceRequest;

class AdminServiceController extends Controller
{
    private $serviceInterface;
    public function __construct(AdminServiceInterface $interface)
    {
        $this->serviceInterface = $interface;
    }

    public function index()
    {
        return $this->serviceInterface->index();
    }

    public function create()
    {
        return $this->serviceInterface->create();
    }

    public function insert(CreateServiceRequest $request)
    {
        return $this->serviceInterface->insert($request);
    }

    public function delete(CheckIdServiceRequest $request)
    {
        return $this->serviceInterface->delete($request);
    }

    public function edit(CheckIdServiceRequest $request)
    {
        return $this->serviceInterface->edit($request);
    }

    public function update(UpdateServiceRequest $request)
    {
        return $this->serviceInterface->update($request);
    }
}
