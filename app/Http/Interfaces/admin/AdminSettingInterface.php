<?php

namespace App\Http\Interfaces\admin;

interface AdminSettingInterface
{
    public function index();
    public function create();
    public function insert($request);
    public function delete($request, $service);
    public function edit($request);
    public function update($request);
}
