<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('fronts.index');
    }
    public function about(){
        return view('fronts.about');
    }

    public function shop(){
        return view('fronts.shop');
    }

    public function single(){
        return view('fronts.single');
    }

    
    public function admin(){
        return view('fronts.admin');
    }
    
    public function checkout(){
        return view('fronts.checkout');
    }
    public function seller(){
        return view('fronts.seller');
    }
    public function payment(){
        return view('fronts.payment');
    }

    public function service(){
        return view('fronts.service');
    }
    public function contact(){
        return view('fronts.contact');
    }
}

