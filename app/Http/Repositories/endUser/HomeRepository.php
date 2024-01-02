<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\HomeInterface;

class HomeRepository implements HomeInterface
{

    public function index()
    {
        return view('endUser/home');
    }
}
