<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminContactInterface;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class AdminContactRepository implements AdminContactInterface
{

    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function delete($id): RedirectResponse
    {
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
