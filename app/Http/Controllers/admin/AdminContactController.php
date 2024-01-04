<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminContactInterface;

class AdminContactController extends Controller
{
    private $contactInterface;
    public function __construct(AdminContactInterface $interface)
    {
        $this->contactInterface = $interface;
    }

    public function index()
    {
        return $this->contactInterface->index();
    }

    public function delete($id)
    {
        return $this->contactInterface->delete($id);
    }
}
