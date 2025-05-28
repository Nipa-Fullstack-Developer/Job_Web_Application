<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate(
            [
                'name'              => 'required',
                'email'             => 'required|unique:users',
                'password'          => 'required|min:6',
                'confirm_password'  => 'required_with:password|same:password|min:6',
                'users_img'         => 'required|mimes:jpeg,png,jpg',

            ],
            [
                // msg
                'name.required'             => 'Name Should Not be Empty',
                'email.required'            => 'Email Should Be Valid',
                'password.required'         => 'Password Should Be At Least 6 Characters',
                'confirm_password.required' => 'Confirm Password Must Match At Least 6 Characters',
                'users_img.required'        => 'Image Should Be Valid',

            ]
        );

        // image
        $imageName = time() . '.' . $request->users_img->extension();
        $request->users_img->move(public_path('uploads/user'), $imageName);

        $user = new User();
        $user->name              = $request->name;
        $user->email             = $request->email;
        $user->password          = Hash::make($request->password);
        $user->users_img         = $imageName;



        $user->save();
        toastr()->success('User Registration Successfully');
        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == 'user') {
                return redirect()->intended('user/dashboard');
            } else {
                toastr()->error('No Available Emails..Please Check');
                return redirect()->route('login');
            }
        } else {
            toastr()->error('Please Enter The Correct Credentils');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        toastr()->success('User Logout Successfully');
        return redirect()->route('login');
    }
}
