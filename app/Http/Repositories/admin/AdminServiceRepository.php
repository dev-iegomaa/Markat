<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminServiceInterface;
use App\Models\Service;

class AdminServiceRepository implements AdminServiceInterface
{
    private $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $services = $this->service::get();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function insert($request)
    {
        $this->service::create([
            'service' => $request->service
        ]);
        return redirect(route('admin.service.index'));
    }

    public function delete($request)
    {
        $this->service::find($request->id)->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $service = $this->service::find($request->id);
        return view('admin.service.edit', compact('service'));
    }

    public function update($request)
    {
        $this->service::find($request->id)->update([
            'service' => $request->service
        ]);
        return redirect(route('admin.service.index'));
    }
}
