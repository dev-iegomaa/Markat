<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminSliderInterface;
use App\Http\Requests\admin\slider\CheckIdSliderRequest;
use App\Http\Requests\admin\slider\CreateSliderRequest;
use App\Http\Requests\admin\slider\UpdateSliderRequest;

class AdminSliderController extends Controller
{
    private $sliderInterface;
    public function __construct(AdminSliderInterface $interface)
    {
        $this->sliderInterface = $interface;
    }

    public function index()
    {
        return $this->sliderInterface->index();
    }

    public function create()
    {
        return $this->sliderInterface->create();
    }

    public function insert(CreateSliderRequest $request)
    {
        return $this->sliderInterface->insert($request);
    }

    public function delete(CheckIdSliderRequest $request)
    {
        return $this->sliderInterface->delete($request);
    }

    public function edit(CheckIdSliderRequest $request)
    {
        return $this->sliderInterface->edit($request);
    }

    public function update(UpdateSliderRequest $request)
    {
        return $this->sliderInterface->update($request);
    }
}
