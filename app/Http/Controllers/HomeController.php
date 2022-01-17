<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\SendEmailNotification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function send()
    {
        $user = User::find(2);
        $details=[
            "greeting" => "hi i m mohammed from laravel",
            "body" => "body line",
            "actiontext" => "clik her",
            "actionurl" => "/",
            "lastline" => "last line",
        ];
        Notification::send("mohammed.el-abidi@elephant-vert.com",new SendEmailNotification($details));
        dd("done");
    }
}
