<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 26/01/2019
 * Time: 21:48
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Entities\User;
use App\Mail\OrderShipped;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DashBoardController extends BaseController
{

    public function index()
    {
        $user = Session::get('user');
        return view('dashboard_view', ["title" => 'Dashboard', 'user' => $user]);
    }

}