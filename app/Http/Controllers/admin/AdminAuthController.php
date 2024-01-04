<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminAuthInterface;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private $authInterface;
    public function __construct(AdminAuthInterface $interface)
    {
        $this->authInterface = $interface;
    }

    public function index()
    {
        return $this->authInterface->index();
    }

    public function login(Request $request)
    {
        return $this->authInterface->login($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }

}
