<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function __construct()
    {
        $this->adminMiddleware();
    }

    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $users = User::all();
            return view('admin.user.index', ['users' => $users]);
        } else {
            return view('admin.user.index', ['user' => Auth::user()]);
        }
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $input = $request->all();
        $image = $this->uploadSingleFile('image/user', 'image');
        $input['image'] = $image;
        User::create($input);
        return redirect()->route('user.index')->with('success', 'Data created successfully');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user,
            'roles' => Role::all()
        ]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        return $this->updateUser($request, $user, 'user.index');
    }

    public function destroy(User $user)
    {
        if (Auth::id() == $user->id) return redirect()->route('user.index')->with('error', 'You can not delete your self');
        else {
            $user->delete();
            $this->deleteFile('image/user/', $user->image);
            return redirect()->route('user.index')->with('success', 'Data removed successfully');
        }
    }
}
