<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminProvideServiceInterface;
use App\Http\Traits\provide\ProvideTrait;
use App\Http\Traits\service\ServiceTrait;
use App\Models\Provide;
use App\Models\ProvideService;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProvideServiceRepository implements AdminProvideServiceInterface
{
    private $provideModel;
    private $serviceModel;
    use ProvideTrait, ServiceTrait;
    public function __construct(Provide $provide, Service $service)
    {
        $this->provideModel = $provide;
        $this->serviceModel = $service;
    }

    public function index()
    {
        $provideServices = ProvideService::with(['provides', 'services'])->get();
        return view('admin.provide_service.index', compact('provideServices'));
    }

    public function create()
    {
        $provides = $this->getAllProvidesData();
        $services = $this->getAllServices();
        return view('admin.provide_service.create', compact('provides', 'services'));
    }

    public function insert($request)
    {
        foreach ($request->services_id as $service_id)
        {
            ProvideService::create([
                'provide_id' => $request->provide_id,
                'service_id' => $service_id
            ]);
        }
        Alert::toast('Provide Service Created Successfully', 'success');
        return redirect(route('admin.provide.service.index'));
    }

    public function delete($request): RedirectResponse
    {
        ProvideService::find($request->id)->delete();
        Alert::toast('Provide Service Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $provideService = ProvideService::find($id);
        if ($provideService) {
            $provides = $this->getAllProvidesData();
            $services = $this->getAllServices();
            return view('admin.provide_service.edit', compact('provideService', 'provides', 'services'));
        }
        Alert::toast('Provide Service Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        ProvideService::find($request->id)->update([
            'provide_id' => $request->provide_id,
            'service_id' => $request->service_id
        ]);
        Alert::toast('Provide Service Updated Successfully', 'success');
        return redirect(route('admin.provide.service.index'));
    }
}
