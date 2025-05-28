<?php

namespace App\Http\Controllers;

use App\Models\JobApplier;
use Illuminate\Http\Request;

class JobApplierController extends Controller
{
    public function show(JobApplier $jobapplier)
    {
        return view('dashboard.user.jobapplier.show', compact('jobapplier'));
    }

    public function edit(JobApplier $jobapplier)
    {
        return view('dashboard.user.jobapplier.edit', compact('jobapplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobApplier $jobapplier)
    {
        $request->validate(
            [
                'company_name'        => 'required|max:255',
                'job_title'           => 'required|max:255',
                'application_date'    => 'required',
                'application_status'  => 'required',
                'job_board'           => 'required',
                'notes'               => 'required',


            ],
            [
                //msg
                'company_name.required' => 'Company Name Should Not Be Empty',
                'company_name.max'      => 'Company Name Should Be 255 Characters',

                'company_name.required' => 'Title Name Should Not Be Empty',
                'company_name.max'      => 'Title Name Should Be 255 Characters',

                'application_date.required'   => 'Date Should Be Valid',
                'application_status.required' => 'Status Should Be Valid',
                'job_board.required'          => 'Name Should Be Valid',
                'notes.required'              => 'Notes Should Be Valid',

            ]
        );


        $jobapplier->company_name        = $request->company_name;
        $jobapplier->job_title           = $request->job_title;
        $jobapplier->application_date    = $request->application_date;
        $jobapplier->application_status  = $request->application_status;
        $jobapplier->job_board           = $request->job_board;
        $jobapplier->notes               = $request->notes;

        $jobapplier->save();
        toastr()->success('Applier Detaiis Updated Successfully');
        return redirect()->route('user.dashboard');
    }

    public function editImage(JobApplier $jobapplier)
    {
        return view('dashboard.user.jobapplier.edit_image', compact('jobapplier'));
    }

    public function updateImage(Request $request, JobApplier $jobapplier)
    {
        $request->validate(
            [

                'newapplier_img'          => 'required|mimes:jpeg,png,jpg',
                'newapplier_alt_img'      => 'required',


            ],
            [
                'newapplier_img.required'     => 'Image Should Be Valid',
                'newapplier_alt_img.required' => 'Image Name Should Be Valid'

            ]
        );

        // image
        $imageName = time() . '.' . $request->newapplier_img->extension();
        $request->newapplier_img->move(public_path('uploads/newjobapplier'), $imageName);

        $jobapplier->newapplier_img          = $imageName;
        $jobapplier->newapplier_alt_img      = $request->newapplier_alt_img;

        $jobapplier->save();
        toastr()->success('Applier Image Updated Successfully');
        return redirect()->route('user.dashboard');
    }

    public function destroy(JobApplier $jobapplier)
    {
        $image_path = 'uploads/newjobapplier/' . $jobapplier->newapplier_img;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $jobapplier->delete();

        toastr()->success('All Applier Details Deleted Successfully');
        return redirect()->route('user.dashboard');
    }
}
