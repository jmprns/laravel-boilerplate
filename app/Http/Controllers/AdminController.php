<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\Admin\StoreRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::with('account')->get();

        return view('admin.index', compact('admins'));
    }

    public function store(StoreRequest $request)
    {
        $admin = Admin::create([
            'name'     => [
                'first'  => $request->input('first_name'),
                'last'   => $request->input('last_name'),
                'middle' => $request->input('middle_name'),
            ],
            'birthday' => $request->input('birthday'),
        ]);

        $admin->account()->create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password'))
        ]);

        return response()->json([
            'message' => 'Admin has been registered.',
            'intended' => route('admin.index')
        ]);
    }

    public function destroy(Admin $admin)
    {

        $admin->account()->delete();
        $admin->delete();

        return response()->json([
            'message' => 'Admin has been deleted.',
            'intended' => route('admin.index')
        ]);

    }
}
