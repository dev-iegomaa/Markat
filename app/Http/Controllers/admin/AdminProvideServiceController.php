<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminProvideServiceInterface;
use App\Http\Requests\admin\provide_service\CreateProvideServiceRequest;
use App\Http\Requests\admin\provide_service\DeleteProvideServiceRequest;
use App\Http\Requests\admin\provide_service\UpdateProvideServiceRequest;

class AdminProvideServiceController extends Controller
{
    private $provideServiceInterface;
    public function __construct(AdminProvideServiceInterface $interface)
    {
        $this->provideServiceInterface = $interface;
    }

    public function index()
    {
        return $this->provideServiceInterface->index();
    }

    public function create()
    {
        return $this->provideServiceInterface->create();
    }

    public function insert(CreateProvideServiceRequest $request)
    {
        return $this->provideServiceInterface->insert($request);
    }

    public function delete(DeleteProvideServiceRequest $request)
    {
        return $this->provideServiceInterface->delete($request);
    }

    public function edit($id)
    {
        return $this->provideServiceInterface->edit($id);
    }

    public function update(UpdateProvideServiceRequest $request)
    {
        return $this->provideServiceInterface->update($request);
    }
}
