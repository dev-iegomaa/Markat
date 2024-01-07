<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminContactInterface;
use App\Http\Traits\contact\ContactTrait;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContactRepository implements AdminContactInterface
{
    private $contactModel;
    use ContactTrait;
    public function __construct(Contact $contact)
    {
        $this->contactModel = $contact;
    }

    public function index()
    {
        $contacts = $this->getAllContacts();
        return view('admin.contact.index', compact('contacts'));
    }

    public function delete($id): RedirectResponse
    {
        $contact = $this->findContactById($id);
        if ($contact) {
            $contact->delete();
            Alert::toast('Contact Deleted Successfully', 'success');
            return redirect()->back();
        }
        Alert::toast('Contact Not Found', 'error');
        return redirect()->back();
    }
}
