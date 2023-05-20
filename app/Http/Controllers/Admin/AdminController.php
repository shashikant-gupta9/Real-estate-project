<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function ActionLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ];

        // this is custome meg
        $custommesg = [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',

        ];
        
        $this->validate($request, $rules, $custommesg);
       $users = DB::table('admins')->where('email',$request->email)->first();
        if($users!=null)
        {
            if($request->get('password')==$users->password)
            {
                                    
              
                    session()->put('id',$users->id);
                    session()->put('email',$users->email);
                    session()->put('type',$users->type);
                    return redirect('/admin/dashboard');
                
            }
            else
            {
                return redirect('/')->withErrors(['message',"Invalid password please enter correct password"]);
            }
        }
        else
        {
            return redirect('/')->withErrors(["Invalid username please enter correct username"]);
        }
        
    }

    public function Logout()
    {
        session()->forget('id');
        session()->forget('email');
        session()->forget('type');
        return redirect('/admin/login')->with('success','You are logout successfully!');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
