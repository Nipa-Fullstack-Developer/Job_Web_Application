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

}
