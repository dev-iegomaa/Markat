<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\ContactInterface;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::toast('Contact Created Successfully', 'success');
        return redirect()->back();
    }
}
