<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function index2()
    { 
        return view('CreateAdmin');
    }
    public function insert(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $email_check = User::where(['email' => @$email])->get();
        
        if (count($email_check) > 0) {
            echo 'There is already Exist User of ' . $email . ' .... Please Try Again';
        } else {
           
        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        
        $user->save();

            return back();
        }
    }
}
