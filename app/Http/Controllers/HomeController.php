<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function filter(){
        return view('filter');
    }
    public function basket(){
        return view('basket');
    }
}
