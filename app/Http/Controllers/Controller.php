<?php

namespace App\Http\Controllers;

use App\Events\AccountCreated;
use App\Mail\NewAccountMail;
use App\Mail\StartuperAccountActivated;
use Illuminate\Support\Facades\DB;

use App\Entities\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Mail\AccountCreated as AccountCreation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Pusher\Pusher;
use Pusher\PusherException;

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
        $user = User::where('email', $data['email'])->where('password', $data['password'])->first();
        if (is_null($user)) {
            return view('user_management_views.login', ['page_title' => 'Dashboard login', 'error' => 'Invalid e-mail / password']);

        } else if (!$user->isActive) {
            return view('user_management_views.login', ['page_title' => 'Dashboard login', 'error' => 'Account not activated. Please refer to your adimistrator.']);
        } else {

            $disabled_account = DB::table('users')->where('isActive', '=', '0')->count();
            Session::put('disabled_account', $disabled_account);
            Session::put('user', $user);

            if ($user->role == "Super Admin") {
                return redirect('dashboard');
            } else if ($user->role == "Admin") {
                return redirect('dashboard');

            } else if ($user->role == "Startuper") {

                return view('application_management_views.submit_presentation_view', ["title" => 'Dashboard', 'user' => $user]);

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
        $this->notify();
        $this->sendMailToAdmin($user);
        if ($user->role == 'Startuper') {
            return view("application_management_views.apply", ['user' => $user]);
        }
        return redirect('login');

    }

    function notifyStartuperAccountActivation($user)
    {
        Mail::to($user->email)->queue(new StartuperAccountActivated($user));

    }

    function sendMailToAdmin(User $use)
    {
        $user = User::where("role", "=", "Super Admin")->get();
        foreach ($user as $u) {
            Mail::to($u->email)->queue(new NewAccountMail($use));
        }
    }

    function notify()
    {
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        try {
            $pusher = new Pusher(
                'fa2d81006f4d56b91ca3',
                '97598b415e5a81cc36ab',
                '705888',
                $options
            );
            $data['message'] = 'New Account created';

            $pusher->trigger('account-creation', 'my-event', $data);

        } catch (PusherException $e) {
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    function user_management()
    {
        if (Session::has('user')) {
            $u = Session::get('user');
            if ($u->role == "Super Admin") {

                $user = User::all();
                return view('user_management_views.user_management', ['title' => 'New accounts', 'users' => $user]);
            }
        }
        return redirect('login');
    }

    function ban_account(Request $request)
    {
        DB::table('users')
            ->where('id', $request->all()['id'])
            ->update(['isActive' => "0"]);
        return redirect('user_management');
    }

    function activate_account(Request $request)
    {
        DB::table('users')
            ->where('id', $request->all()['id'])
            ->update(['isActive' => "1"]);
        $user = User::where("id", "=", $request->all()['id']);
        $this->notifyStartuperAccountActivation($user);
        return redirect('user_management');
    }

    function accounts_badge()
    {
        $count = DB::table('users')
            ->where('isActive', "=", 0)->count();
        return $count;
    }

    function visit_profile(Request $request)
    {
        $user = User::find($request->all()['id']);
        return view('user_management_views.visit_profil_view', ['title' => $user->name . "'s Profile", 'user' => $user]);
    }

    function find_users(Request $request)
    {
        $query = $request->all()['query'];
        $user = User::where('name', 'like', '%' . $query . '%')->orWhere('last_name', 'like', '%' . $query . '%')->get();
        return view('user_management_views.user_management', ['title' => 'New accounts', 'users' => $user]);


    }
}

