<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 21/02/2019
 * Time: 11:59
 */

namespace App\Http\Controllers;

use App\Entities\Message;
use Illuminate\Http\Request;

use App\Entities\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MessagerieController
{
    function index($id)
    {
        $other_user = User::find($id);

        return view('messager_views.send_message_view',
            [
                'title' => $other_user->name . " " . $other_user->last_name,
                "other_user" => $other_user,
                "user" => Session::get('user')
            ]);
    }

    function startuper_index()
    {
        $messages = Db::table('messages')
            ->where("receiver_id", "=", Session::get('user')->id)
            ->orderBy('isReaded', 'asc')
            ->distinct()->get();
        $other_users = array();

        foreach ($messages as $m)
            array_push($other_users, User::find($m->sender_id));


        return view('messager_views.startuper_messagerie_view',
            [
                'title' => "Inbox",
                "other_users" => array_unique($other_users),
                "user" => Session::get('user')
            ]);

    }

    function sendNewMessage(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $message = new Message;
        $message->sender_id = $data['user'];
        $message->receiver_id = $data['other_user_id'];
        $message->message = $data['message'];
        $message->content_type = "plain_text";
        $message->save();
        return response("Thank you", 200);
    }

    function track_discussion($id_connected, $id_sender)
    {
        DB::table('messages')->where('receiver_id', '=', $id_connected)
            ->where('sender_id', '=', $id_sender)
            ->update(['isReaded' => 1]);
        return response(json_encode(Message::where("receiver_id", "=", $id_connected)
            ->Where("sender_id", "=", $id_sender)
            ->orWhere("receiver_id", "=", $id_sender)
            ->Where("sender_id", "=", $id_connected)
            ->orderBy('id', 'asc')
            ->get()), 200);

    }


}