<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminAuthInterface;
use App\Http\Requests\admin\auth\LoginRequest;

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

    public function login(LoginRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }

}
