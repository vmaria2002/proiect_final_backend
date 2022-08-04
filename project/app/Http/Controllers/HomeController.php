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
         return view('emails.welcome');
    }
} 