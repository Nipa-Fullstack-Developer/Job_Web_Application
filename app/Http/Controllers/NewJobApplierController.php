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
                'company_name'        => 'required|max:255',
                'job_title'           => 'required|max:255',
                'application_date'    => 'required',
                'application_status'  => 'required',
                'newapplier_img'      => 'required|mimes:jpeg,png,jpg',
               
               
            ],
            [
                //msg
                'company_name.required' => 'Company Name Should Not Be Empty',
                'company_name.max'      => 'Company Name Should Be 255 Characters',

                'company_name.required' => 'Title Name Should Not Be Empty',
                'company_name.max'      => 'Title Name Should Be 255 Characters',

                'application_date.required'   => 'Date Should Be Valid',
                'application_status.required' => 'Status Should Be Valid',
                'newapplier_img.required' => 'Status Should Be Valid',
                
            ]
        );

        // image
        $imageName = time() . '.' . $request->newapplier_img->extension();
        $request->newapplier_img->move(public_path('uploads/newjobapplier'), $imageName);

        $jobapplier = new JobApplier();
        $jobapplier->company_name        = $request->company_name;
        $jobapplier->job_title           = $request->job_title;
        $jobapplier->application_date    = $request->application_date;
        $jobapplier->application_status  = $request->application_status;
        $jobapplier->newapplier_img      = $imageName;
       
        $jobapplier->save();
        toastr()->success('You Applied Successfully, Please Wait For Response');
        return redirect()->route('home');
    }
}
