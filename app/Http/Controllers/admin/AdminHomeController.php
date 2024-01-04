<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminHomeInterface;

class AdminHomeController extends Controller
{
    private $homeInterface;
    public function __construct(AdminHomeInterface $interface)
    {
        $this->homeInterface = $interface;
    }

    public function index()
    {
        return $this->homeInterface->index();
    }
}
