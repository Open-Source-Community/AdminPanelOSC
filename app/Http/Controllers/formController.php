<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class formController extends Controller
{
    //
    public function settings(){
        return view("Admin.form.settings");
    }

    public function slots(){
        return view("Admin.form.slots");
    }
}
