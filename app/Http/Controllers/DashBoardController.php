<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 26/01/2019
 * Time: 21:48
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Entities\User;
use App\Mail\AccountCreated;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DashBoardController extends BaseController
{

    public function index()
    {
        $user = Session::get('user');
        $lab_need = DB::table('applications')->where('user_expectation', '=', 'Laboratory')->count();
        $internet_need = DB::table('applications')->where('user_expectation', '=', 'Internet')->count();
        $mento_need = DB::table('applications')->where('user_expectation', '=', 'Business managerial mentorship')->count();

        return view('dashboard_view', ["title" => 'Dashboard',
            'user' => $user,
            "lab_need" => $lab_need,
            "internet_need" => $internet_need,
            "mento_need" => $mento_need
        ]);
    }

}