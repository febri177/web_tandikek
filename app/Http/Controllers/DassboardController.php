<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DassboardController extends Controller
{
    public function index(){
        return view('backend.content.dashboard');
    }
}
