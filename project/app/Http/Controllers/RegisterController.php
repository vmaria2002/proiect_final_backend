<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(StoreUserRequest $request) 
    {
        //$user = User::create($request->validated());

        $user= User::create([
            'name' => $request['name'],
            'remember_token' => $request['password'],
            'password' => Hash::make($request['password']),
            'email' => $request['email']]);
        $user->roles()->sync($request->input('roles', []));

        event(new Registered($user));

       // auth()->login($user);

        return redirect('emails.welcome')->with('success', "Account successfully registered.");
    }
}