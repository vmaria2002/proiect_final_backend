<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreInviteRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Auth;

class InviteController extends Controller

{
    public function index()
    {
        return view('invite.liveinvite');
    }

    public function create()
    {
       
        $roles = Role::pluck('title', 'id');

        return view('invite.liveinvite', compact('roles'));
    }


    public function store(StoreInviteRequest $request)
    {
        $user = User::create($request->validated());
        $user->roles()->sync($request->input('roles', []));
        
       // echo var_dump($user);

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from codeanddeploy.com',

            'actionText' => 'Register',
            'actionURL' => url('http://127.0.0.1:8000/register'),
            'id' => 1
        ];

        Notification::send($user, new EmailNotification($project));
        $user->delete();

        //return redirect()->route('users.index');

        return view('emails.welcome');
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



