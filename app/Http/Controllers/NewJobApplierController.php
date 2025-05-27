<?php

namespace App\Http\Controllers;

use App\Models\JobApplier;
use Illuminate\Http\Request;

class NewJobApplierController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'                => 'required|max:255',
                'company_name'        => 'required|max:255',
                'job_title'           => 'required|max:255',
                'application_date'    => 'required',
                'application_status'  => 'required',
                'newapplier_img'      => 'required|mimes:jpeg,png,jpg',
                'job_board'           => 'required',
                'notes'               => 'required',

            ],
            [
                //msg
                'name.required' => 'Your Name Should Not Be Empty',
                'name.max'      => 'Your Name Should Be 255 Characters',

                'company_name.required' => 'Company Name Should Not Be Empty',
                'company_name.max'      => 'Company Name Should Be 255 Characters',

                'company_name.required' => 'Title Name Should Not Be Empty',
                'company_name.max'      => 'Title Name Should Be 255 Characters',

                'application_date.required'   => 'Date Should Be Valid',
                'application_status.required' => 'Status Should Be Valid',
                'newapplier_img.required'     => 'Image Should Be Valid',
                'job_board.required'          => 'Name Should Be Valid',
                'notes.required'              => 'Notes Should Be Valid',
            ]
        );

        // image
        $imageName = time() . '.' . $request->newapplier_img->extension();
        $request->newapplier_img->move(public_path('uploads/newjobapplier'), $imageName);

        $jobapplier = new JobApplier();
        $jobapplier->name                = $request->name;
        $jobapplier->company_name        = $request->company_name;
        $jobapplier->job_title           = $request->job_title;
        $jobapplier->application_date    = $request->application_date;
        $jobapplier->application_status  = $request->application_status;
        $jobapplier->newapplier_img      = $imageName;
        $jobapplier->job_board           = $request->job_board;
        $jobapplier->notes               = $request->notes;


        $jobapplier->save();
        toastr()->success('You Applied Successfully, Please Wait For Response');
        return redirect()->route('home');
    }
}
