<?php

/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 01/03/2019
 * Time: 10:45
 */

namespace App\Http\Controllers;


use App\Entities\Applications;
use App\Entities\Deadline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Entities\User;
use App\Mail\AccountCreated;
use Illuminate\Support\Facades\Session;

use Illuminate\Routing\Controller as BaseController;

class StartuperDasboardController extends BaseController
{
    public function index()
    {
        if (Session::has('user')) {
            $user = Session::get('user');
            $application = Applications::where('user_id', '=', $user->id)->first();
            $deadline = Deadline::where('application_id', '=', $application->id)->first();
            $unreaded_messages = DB::table('messages')
                ->where('receiver_id', '=', $user->id)
                ->where('isReaded', '=', 0)
                ->count();
            return view('application_management_views.startuper_dasboard',
                [
                    'application' => $application,
                    "title" => "Welcome back",
                    "deadline" => $deadline,
                    "unreaded_messages" => $unreaded_messages
                ]);
        } else
            return redirect('login');
    }

}