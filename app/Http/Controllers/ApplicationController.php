<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 24/01/2019
 * Time: 14:43
 */

namespace App\Http\Controllers;


use App\Entities\Applications;
use App\Mail\PresentationSubmited;
use App\Vote\Vote;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ApplicationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        if (Session::has('user')) {

            $app = Applications::where('isAccepted', 1)->get();
            $user = Session::get('user');
            $votes = Vote::where('user_id', $user->id)->get();

            return view('application_management_views.table_view_application',
                [
                    'applications' => $app,
                    'title' => 'Pending applications',
                    'votes' => $votes,
                    'user' => $user
                ]);
        } else
            return redirect('login');
    }

    public function downloadTemplate()
    {
        $file = public_path() . "/storage/template_presentation.pptx";

        $headers = array(
            'Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation',
        );

        return response()->download($file, 'template.pptx', $headers);

    }

    public function add(Request $request)
    {
        $data = $request->all();
        $application = new Applications;
        $application->pan_number = $data['pan_number'];
        $application->compagny_number = $data['compagny_number'];
        $application->innovation_sector = $data['innovation_sector'];
        $application->innovation_field = $data['innovation_sector'];
        $application->innovation_description = $data['innovation_description'];
        $application->estimated_cost = $data['estimated_cost'];
        $application->startup_description = $data['startup_description'];
        $application->invested_funds = $data['invested'];
        $application->expediture_product = $data['exp_product'];
        $application->expediture_sales = $data['exp_sales'];
        $application->inspiration = $data['isnpiration'];
        $application->user_expectation = $data['expectation'];
        $application->tech_innovation = $data['tech_innov'];
        $application->isAccepted = false;
        if ($data['is_started'] == 'yes')
            $application->isStarted = true;
        else
            $application->isStarted = false;
        $application->user_id = $data['user'];
        $application->save();

        $file = public_path() . "/storage/template_presentation.pptx";

        $headers = array(
            'Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation',
        );

        response()->download($file, 'template.pptx', $headers);
        return view('application_management_views.post_application_view');
    }

    public function upload_presentation(Request $request)
    {
        if ($request->hasFile('file')) {
            // $request->image->store();

            $fileName = $request->file("file");
            if (is_null($fileName)) {
                return redirect('login');
            }

            $application = Applications::find($request->all()['id']);
            $this->notifyAdminWithEmail($application->user);
            $file_extension = $fileName->getClientOriginalExtension();
            if (($file_extension == "pptx")) {
                $path = $fileName->store("public/images");
                $file_path = "storage" . substr($path, 6);

                DB::table('applications')
                    ->where('id', $request->all()['id'])
                    ->update(['isPresentationSubmited' => "1", 'presentation_file' => $file_path]);
                return redirect('startuper/dashboard/');
            }


        } else {
            return redirect('startuper/dashboard/');
        }


    }

    public function notifyAdminWithEmail($user)
    {
        $admins = DB::table("users")->where("role", "=", "Super Admin")->get();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->queue(new PresentationSubmited($user));
        }
    }

    public function downloadPresentation(Request $request)
    {
        $app = Applications::find($request->all()['id']);
        $file = public_path($app->presentation_file);

        $headers = array(
            'Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation',
        );

        return response()->download($file, 'template.pptx', $headers);
        // redirect('user_management');

    }

    public function submitApplication(Request $request)
    {
        DB::table('applications')->where('id', $request->all()['id'])
            ->update(['isAccepted' => "1"]);

        return redirect('application/index');
    }

    public function vote_up(Request $request)
    {
        $vote = new Vote;
        $vote->user_id = $request->all()['number2'];
        $vote->application_id = $request->all()['number1'];
        $vote->isAccepted = true;
        $vote->save();
        return redirect('application/detail/' . $request->all()['number1']);
    }

    public function vote_down(Request $request)
    {

        $vote = new Vote;
        $vote->user_id = $request->all()['number2'];
        $vote->application_id = $request->all()['number1'];
        $vote->isAccepted = false;
        $vote->save();
        return redirect('application/detail/' . $request->all()['number1']);
    }

    public function detail($id)
    {
        if (Session::has('user')) {
            $positive_votes = DB::table('votes')->where('application_id', "=", $id)
                ->where("isAccepted", "=", 1)->count();

            $negative_votes = DB::table('votes')->where('application_id', "=", $id)
                ->where("isAccepted", "=", 0)->count();

            $user_id = Session::get('user');
            $app = Applications::find($id);
            $vote = DB::table("votes")->where('user_id', "=", $user_id->id)->where('application_id', "=", $id)->get();
            return view('application_management_views.application_detail', ['app' => $app,
                'vote' => $vote,
                'title' => 'Application Details',
                'user' => $user_id,
                'positive_votes' => $positive_votes,
                'negative_votes' => $negative_votes
            ]);
        }
        return redirect('/login');
    }

    public function new_applications()
    {
        if (Session::has('user')) {

            $user_id = Session::get('user')->id;
            $count = DB::table('applications')->where('isAccepted', "=", "1")->count();
            $already_voted = DB::table('votes')->where('user_id', '=', $user_id)->count();
            if ($already_voted > $count)
                return 0;
            else
                return $count - $already_voted;
        } else
            return 0;

    }

}