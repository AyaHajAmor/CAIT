<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    
    public function login(){
        return view('pages.login');
    }
    public function singin(){
        return view('pages.singin');
    }
    
}
