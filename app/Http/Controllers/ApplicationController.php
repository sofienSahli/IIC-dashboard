<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 24/01/2019
 * Time: 14:43
 */

namespace App\Http\Controllers;


use App\Entities\Applications;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ApplicationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $app = Applications::all();

        return view('application_management_views.table_view_application', ['applications' => $app, 'title' => 'Pending applications']);
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
        //    DB::table('users')
        //      ->where('id', $request->all()['id'])
        //     ->update(['isActive' => "1"]);

        if ($request->hasFile('file')) {
            // $request->image->store();


            $fileName = $request->file("file");
            if (is_null($fileName)) {
                return redirect('login');
            }
            $file_extension = $fileName->getClientOriginalExtension();
            if (($file_extension == "pptx")) {
                $path = $fileName->store("public/images");
                $file_path = "storage" . substr($path, 6);
                DB::table('applications')
                    ->where('id', $request->all()['id'])
                    ->update(['isPresentationSubmited' => "1", 'presentation_file' => $file_path]);
                return redirect('login');
            }


        } else {
            $user = Session::get('user');
            return view('application_management_views.submit_presentation_view', ["title" => 'Dashboard', 'user' => $user]);
        }


    }

}