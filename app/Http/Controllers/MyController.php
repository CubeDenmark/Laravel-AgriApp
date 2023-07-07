<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdbs;

class MyController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function signup()
    {
        return view('pages.signup');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:userdbs',
            'pass'=>'required|min:8|max:12',
            'conpass'=>'required',
            'phonenum'=>'required|min:11|max:11',
            'address'=>'required'
        ]);
        $user = new Userdbs();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->pass = $request->pass;
        $user->phonenum = $request->phonenum;
        $user->address = $request->address;
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('failed', 'Failed to register T-T. Something went wrong');
        }
    }

}
