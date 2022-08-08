<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view ('register');
    }

    public function store(Request $request){
        return view('login');
    }
}
