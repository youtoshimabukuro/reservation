<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function getRegister()
    {
        return view('representative_register');
    }

    public function create(RegisterRequest $request)
    {
        $representative=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $representative->assignRole('representative');

        // Session::flash('message', '代表者を登録しました');

        return redirect('/admin/register')->with('message','代表者を登録しました');
    }
}
