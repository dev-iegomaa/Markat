<?php

namespace App\Http\Interfaces\admin;

interface AdminProvideInterface
{
    public function index();
    public function create();
    public function insert($request);
    public function delete($request);
    public function edit($request);
    public function update($request);
}
