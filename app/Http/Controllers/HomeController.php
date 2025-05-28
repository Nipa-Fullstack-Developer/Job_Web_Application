<?php

namespace App\Http\Controllers;

use App\Models\JobApplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.index');
    }

    // jobapplier deatils
    public function details()
    {
        $jobapplier = JobApplier::all();
        return view('home.jobapplier.details', compact('jobapplier'));
    }

    public function detailsShow(JobApplier $jobapplier)
    {
        $jobapplier = JobApplier::all();
        $pdf = PDF::loadView('home.jobapplier.jobapplier_details_view',compact('jobapplier'));
        return $pdf->download('jobapplier_details_view.pdf');
    }
}
