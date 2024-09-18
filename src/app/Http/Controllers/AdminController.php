<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getRegister()
    {
        return view('representative_register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $representative=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $representativeRole = Role::create(['name' => 'representative']);

        // $store_representative = Permission::create(['name' => 'store_representative']);

        // $adminRole->givePermissionTo($store_representative);

        $representative->assignRole($representativeRole);

        return view('representative_register');
    }
}
