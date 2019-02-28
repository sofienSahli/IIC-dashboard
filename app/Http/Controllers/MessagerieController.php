<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 21/02/2019
 * Time: 11:59
 */

namespace App\Http\Controllers;


use App\Entities\User;
use Illuminate\Support\Facades\Session;

class MessagerieController
{
    function sendMessage($id)
    {
        $other_user = User::find($id);

        return view('messager_views.send_message_view',
            [
                'title' => $other_user->name . " " . $other_user->last_name,
                "other_user" => $other_user,
                "user" => Session::get('user')
            ]);
    }

}