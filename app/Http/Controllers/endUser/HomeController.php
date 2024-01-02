<?php

namespace App\Http\Controllers\endUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\HomeInterface;

class HomeController extends Controller
{
    private $homeInterface;
    public function __construct(HomeInterface $interface)
    {
        $this->homeInterface = $interface;
    }

    public function index()
    {
        return $this->homeInterface->index();
    }
}
