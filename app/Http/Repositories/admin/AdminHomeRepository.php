<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminHomeInterface;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminHomeRepository implements AdminHomeInterface
{

    public function index()
    {
        $contacts = Contact::latest()->take(4)->get();
        return view('admin.index', compact('contacts'));
    }

    public function edit()
    {
        return view('admin.edit');
    }

    public function update($request)
    {
        User::find($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Alert::toast('User Updated Successfully', 'success');
        return redirect(route('admin.edit'));
    }
}
