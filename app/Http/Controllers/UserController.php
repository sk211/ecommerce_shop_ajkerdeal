<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{
    public function profile(){
        return view('dashbord.pages.profile');
    }


    
}
