<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('admin')->only(['update']);
    }

    public function index()
    {
        return view('admin.index', [
            'users'     => DB::table('users')->count(),
            'skills'     => DB::table('skills')->count(),
            'testimonials' => DB::table('testimonials')->count(),
            'services'        => DB::table('services')->count(),
        ]);
    }

    public function profile()
    {
        $roles = Role::all();
        return view('admin.profile', compact('roles'));
    }

    public function update(UserUpdateRequest $request)
    {
        return $this->updateUser($request, Auth::user(), 'admin.profile');
    }
}
