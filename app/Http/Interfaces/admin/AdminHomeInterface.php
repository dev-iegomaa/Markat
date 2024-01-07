<?php

namespace App\Http\Interfaces\admin;

interface AdminHomeInterface
{
    public function index();
    public function edit();
    public function update($request);
}
