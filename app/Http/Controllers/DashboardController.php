<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function dashboard()
  {
    $user = User::all();
    if(Auth::user()->is_role == 'user')
    {
        return view('dashboard.user.index', compact('user'));
    }
  }
}
