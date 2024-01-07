<?php

namespace App\Http\Traits\contact;

trait ContactTrait
{
    private function getAllContacts()
    {
        return $this->contactModel::select('id', 'name', 'address', 'phone', 'email', 'message')->get();
    }

    private function findContactById($id)
    {
        return $this->contactModel::select('id', 'name', 'address', 'phone', 'email', 'message')->find($id);
    }
}
