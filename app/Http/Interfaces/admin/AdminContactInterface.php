<?php

namespace App\Http\Interfaces\admin;

interface AdminContactInterface
{
    public function index();
    public function delete($id);
}
