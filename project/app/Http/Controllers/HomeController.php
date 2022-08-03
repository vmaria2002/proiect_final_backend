<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Notification;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\EmailNotification;

class HomeController extends Controller
{

    function index()
    {

        return view('emails.welcome');
    }


    public function send() 
    {
    	$user = User::latest()->first();

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from codeanddeploy.com',

            'actionText' => 'View Project',
            'actionURL' => url('http://127.0.0.1:8000/reset-password/0ced13de682d263c6b3266dab9fcc72cbd5e1de1674a7cb1db622c98dd05a8a6?email'),
            'id' => 1
        ];

        Notification::send($user, new EmailNotification($project));

        return view('emails.welcome');
    }
} 