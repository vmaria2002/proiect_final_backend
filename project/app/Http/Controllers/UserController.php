<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller

{
    public function index()
    {
       
        
        $users = User::with('roles')->paginate(5);
        
        $user = User::latest()->first();

        // $project = [
        //     'greeting' => 'Succes register!!Hi '.$user->name.',',
        //     'body' => 'This is the project assigned to you.',
        //     'thanks' => 'Thank you this is from codeanddeploy.com',
        //     'actionText' => 'View Project',
        //     'actionURL' => url('/'),
        //     'id' => 1
        // ];
        // Notification::send($user, new EmailNotification($project));
        // dd('Notification sent!');
        return view('users.index', compact('users'));
    }

    public function create()
    {
       
        $roles = Role::pluck('title', 'id');

        return view('users.create', compact('roles'));
    }
    
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $user->roles()->sync($request->input('roles', []));

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from codeanddeploy.com',

            'actionText' => 'Register',
            'actionURL' => url('http://127.0.0.1:8000/reset-password/0ced13de682d263c6b3266dab9fcc72cbd5e1de1674a7cb1db622c98dd05a8a6?email'),
            'id' => 1
        ];

        Notification::send($user, new EmailNotification($project));



        return redirect()->route('users.index');
    }


   

    public function show(User $user)
    {
       
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
       
        $roles = Role::pluck('title', 'id');

        $user->load('roles');

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        
        if($user->id==Auth::user()->id) {
            return back()->with('error', 'The error message here!');
            // return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index');
    }
    public function pericol(User $user)
    {
        

        return redirect()->route('users.pericol');
    }
}



