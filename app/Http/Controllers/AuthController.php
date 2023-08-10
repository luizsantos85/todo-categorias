<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreUpdateFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_store(UserStoreUpdateFormRequest $request)
    {
        $data = $request->except('_token');

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('login');
    }

    public function login_store(UserStoreUpdateFormRequest $request)
    {
        $data = $request->except('_token');

        if(Auth::attempt($data)){
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'E-mail e/ou senha inválidos.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
