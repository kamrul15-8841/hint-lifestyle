<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\ThrottlesLogins;

use DB;
use Auth;
class LoginController extends Controller
{
    public function pageIndex(Request $request)
    {
        $email      =  $request->cookie('email');
        $password   =  $request->cookie('password');

        return view('layout/login', compact('email','password'));
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // default (12345) : $2y$10$pVJ5ageXK3d7ya.ELwFN.uzpYwIi3ojhjTxHx2iMqP2yL4Dnh8bPu

        $username = $request->get('email');
        $password = $request->get('password');
        $remember = $request->get('remember');

        $checkAccess = DB::table('users')->where('email', $username)->count();

        if ($checkAccess > 0) {
            if (Auth::attempt(['email' => $username, 'password' => $password, 'status' => 1])) {
                //echo 'Yes';

                if ($remember != '') {
                    Cookie::queue('remembered_email', $request->email, 60 * 24 * 30); // 30 days
                    Cookie::queue('remembered_password', $request->password, 60 * 24 * 30); // 30 days
                    Cookie::queue('remembered', true, 60 * 24 * 30);
                } else {
                    // Clear cookies if 'remember' is unchecked
                    Cookie::queue(Cookie::forget('remembered_email'));
                    Cookie::queue(Cookie::forget('remembered_password'));
                    Cookie::queue(Cookie::forget('remembered'));
                }

                return Redirect::to('/dashboard');
            } else {
                return Redirect::back()
                    ->withInput($request->all)
                    ->with('msg', 'Invalid email address or password.');
            }
        } else {
            return Redirect::back()
                ->withInput($request->all)
                ->with('msg', 'Invalid email address');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Clear cookies on logout
        Cookie::queue(Cookie::forget('remembered_email'));
        Cookie::queue(Cookie::forget('remembered_password'));
        Cookie::queue(Cookie::forget('remembered'));

        return redirect('/');
    }

    public function forgotPassword()
    {
        return view('layout/forgotPassword');
    }
}
