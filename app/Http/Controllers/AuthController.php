<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreUpdateFormRequest;
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

    public function store(UserStoreUpdateFormRequest $request)
    {
        $data = $request->except('_token');

        // if($data['password'] !== $data['password_confirmation']){
        //     return redirect()->back()->with('error','Senhas não batem.')->withInput();
        // }

        // if($data['email']){
        //     $user = User::where('email', $data['email'])->first();

        //     if($user){
        //         return redirect()->back()->with('error', 'E-mail já cadastrado.')->withInput();
        //     }
        // }

        $data['password'] = Hash::make($request->password);

        $userCreated = User::create($data);

    }
}
