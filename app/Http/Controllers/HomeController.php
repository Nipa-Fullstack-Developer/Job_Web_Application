<?php

namespace App\Http\Controllers;

use App\Models\JobApplier;
use Illuminate\Http\Request;

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
        $jobapplier_detail = JobApplier::all();
        return view('home.jobapplier.details', compact('jobapplier_detail'));
    }

    public function detailsShow(JobApplier $jobapplier)
    {
        return view('home.jobapplier.details_view', compact('jobapplier'));
    }
}
