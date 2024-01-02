<?php

namespace App\Http\Controllers\endUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\ContactInterface;
use App\Http\Requests\endUser\ContactRequest;

class ContactController extends Controller
{
    private $contactInterface;
    public function __construct(ContactInterface $interface)
    {
        $this->contactInterface = $interface;
    }

    public function contact(ContactRequest $request)
    {
        return $this->contactInterface->contact($request);
    }
}
