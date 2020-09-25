<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HpController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about/index');
    }

    public function service(){
        return view('service/index');
    }
}
