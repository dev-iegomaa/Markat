<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\ContactInterface;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class ContactRepository implements ContactInterface
{
    public function contact($request): RedirectResponse
    {
        Contact::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return redirect()->back();
    }
}
