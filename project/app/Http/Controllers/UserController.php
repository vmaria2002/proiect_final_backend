<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
      //  $user = User::create($request->validated());
$user= User::create([
            'name' => $request['name'],
            //'remember_token' => $request['password'],
            'remember_token'=>'Maria1234',
            'password' => Hash::make($request['password']),
            'email' => $request['email']]);
        $user->roles()->sync($request->input('roles', []));
        
       // echo var_dump($user);

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => ' Maria has added you to the database! Your date: user: '.$user->email.'   password:'. $user->remember_token,
            'thanks' => 'You can visit the site by pressing the button or accessing the link',
            'actionText' => 'Visit',
            'actionURL' => url('http://127.0.0.1:8000/login'),
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
      

       else{
     //   var_dump($user);
        $user->delete();
      //  var_dump($user);
        return redirect()->route('users.index');
       }
    }
    public function pericol(User $user)
    {
        return redirect()->route('users.pericol');
    }
}



