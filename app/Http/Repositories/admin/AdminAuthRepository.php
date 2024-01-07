<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminAuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAuthRepository implements AdminAuthInterface
{

    public function index()
    {
        return view('admin.auth.index');
    }

    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            Alert::toast('Login Successfully', 'success');
            return redirect(route('admin.index'));
        }
        return redirect()->back();
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        Alert::toast('Logout Successfully', 'success');
        return redirect(route('admin.auth.index'));
    }
}
