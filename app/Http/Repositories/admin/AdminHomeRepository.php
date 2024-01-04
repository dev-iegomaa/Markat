<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminHomeInterface;

class AdminHomeRepository implements AdminHomeInterface
{

    public function index()
    {
        return view('admin.index');
    }
}
