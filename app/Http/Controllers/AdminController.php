<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.components.main.home');
    }
    public function patient(){
        return view('patient.index');
    }
}
