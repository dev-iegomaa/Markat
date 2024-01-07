<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminUserInterface;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserRepository implements AdminUserInterface
{
    private $userModel;
    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function index()
    {
        $users = $this->userModel::where('email', '!=', auth()->user()->email)->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function insert($request)
    {
        $this->userModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Alert::toast('User Created Successfully', 'success');
        return redirect(route('admin.users.index'));
    }

    public function delete($request): RedirectResponse
    {
        $this->userModel::find($request->id)->delete();
        Alert::toast('User Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = $this->userModel::find($id);
        if ($user) {
            return view('admin.users.edit', compact('user'));
        }
        Alert::toast('User Not Found', 'error');
        return redirect()->back();
    }

    public function update($request)
    {
        $this->userModel::find($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Alert::toast('User Updated Successfully', 'success');
        return redirect(route('admin.users.index'));
    }
}
