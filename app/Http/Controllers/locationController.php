<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class locationController extends Controller
{
    public function location(){
        return view("includes.location");
    }
}
