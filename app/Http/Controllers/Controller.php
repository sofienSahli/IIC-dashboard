<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Entities\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function register()
    {
        return view('user_management_views.sign_up', ['page_title' => 'Registration form']);
    }

    function login()
    {

        return view('user_management_views.login', ['page_title' => 'Dashboard login']);
    }


    //Login Redirection
    function loginRerection(Request $request)
    {
        $data = $request->all();
        $user = DB::table('users')->where('email', '=', $data['email'])->where('password', '=', $data['password'])->first();

        if (is_null($user)) {
            return view('user_management_views.login', ['page_title' => 'Dashboard login', 'error' => 'Invalid e-mail / password']);

        } else if (!$user->isActive) {
            return view('user_management_views.login', ['page_title' => 'Dashboard login', 'error' => 'Account not activated. Please refer to your adimistrator.']);
        } else {


            Session::put('user', $user);

            if ($user->role == "Super Admin") {
                return redirect('dashboard');
            } else if ($user->role == "Admin") {
                return redirect('dashboard');

            } else if ($user->role == "Startuper") {
                return view('dashboard_view', ["title" => 'Dashboard', 'user' => $user]);

            }
        }
    }

    function profile($id)
    {
        $user = User::find($id);
        return view('user_management_views.profile', ['user' => $user]);
        //return view('mails_views.notification_mail_view');

    }


    //Sign up Controller
    function add(Request $request)
    {
        $date = $request->all();
        $u = DB::table('users')->where('email', $date['email'])->get();
        if ($u->isNotEmpty()) {

            return view('user_management_views.sign_up', ['page_title' => 'Dashboard login', 'message' => 'E-mail already used']);
        }
        //Request treatment
        $user = new User;

        // Image treatement
        //     $image = Image::make(Storage::get($imagePath))->resize(320,240)->encode(); ----> Code to resize
        if ($request->hasFile('image')) {
            // $request->image->store();


            $fileName = $request->file("image");
            if (is_null($fileName)) {
                return redirect('register');
            }
            $file_extension = $fileName->getClientOriginalExtension();
            if (!($file_extension == "jpg" || $file_extension == "jpeg" || $file_extension == "png")) {
                return view('user_management_views.sign_up', ['page_title' => 'Dashboard login', 'message' => 'Invalid file format. JPG, JPEG or PNG expected']);

            }

            $path = $fileName->store("public/images");
            $user->profile_picture = "storage" . substr($path, 6);
        }


        $user->name = $date['name'];
        $user->last_name = $date['last_name'];
        $user->email = $date['email'];
        $user->birth_date = $date['birth_date'];
        $user->cin = $date['cin'];
        $user->gender = $date['gender'];
        $user->degree = $date['degree'];
        $user->phone_number = $date['number'];
        $user->address = $date['address'];
        $user->gender = $date['gender'];
        $user->work = $date['work'];
        $user->password = $date['password'];
        $user->role = $date['Role'];
        $user->isActive = false;
        $user->save();

        if ($user->role == 'Startuper') {
            return view("application_management_views.apply", ['user' => $user]);
        }
        return redirect('login');

    }

    function user_management()
    {
        $user = DB::table('users')->where('isActive', '=', false)->where('role', '=', 'Admin')->get();
        return view('user_management_views.user_management', ['title' => 'New accounts', 'users' => $user]);
    }

}

