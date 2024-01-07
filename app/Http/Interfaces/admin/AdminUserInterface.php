<?php

namespace App\Http\Interfaces\admin;

interface AdminUserInterface
{
    public function index();
    public function create();
    public function insert($request);
    public function delete($request);
    public function edit($id);
    public function update($request);
}
