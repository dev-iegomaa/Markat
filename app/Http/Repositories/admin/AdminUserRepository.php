<?php

namespace App\Http\Repositories\admin;

use App\Http\Interfaces\admin\AdminUserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserRepository implements AdminUserInterface
{
    private $userModel;
    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function index()
    {
        $users = $this->userModel::get();
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
        return redirect(route('admin.users.index'));
    }

    public function delete($request)
    {
        $this->userModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function edit($request)
    {
        $user = $this->userModel::find($request->id);
        return view('admin.users.edit', compact('user'));
    }

    public function update($request)
    {
        $this->userModel::find($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect(route('admin.users.index'));
    }
}
