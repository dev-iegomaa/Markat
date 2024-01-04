<?php

namespace App\Http\Interfaces\admin;

interface AdminAuthInterface
{
    public function index();
    public function login($request);
    public function logout();
}
