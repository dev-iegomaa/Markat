<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminServiceInterface;
use App\Http\Traits\service\ServiceTrait;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServiceRepository implements AdminServiceInterface
{
    private $serviceModel;
    use ServiceTrait;
    public function __construct(Service $service)
    {
        $this->serviceModel = $service;
    }

    public function index()
    {
        $services = $this->getAllServices();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function insert($request)
    {
        $this->serviceModel::create([
            'service' => $request->service
        ]);
        Alert::toast('Service Created Successfully', 'success');
        return redirect(route('admin.service.index'));
    }

    public function delete($request): RedirectResponse
    {
        $this->findServiceById($request->id)->delete();
        Alert::toast('Service Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $service = $this->findServiceById($id);
        if ($service) {
            return view('admin.service.edit', compact('service'));
        }
        Alert::toast('Service Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $this->findServiceById($request->id)->update([
            'service' => $request->service
        ]);
        Alert::toast('Service Updated Successfully', 'success');
        return redirect(route('admin.service.index'));
    }
}
