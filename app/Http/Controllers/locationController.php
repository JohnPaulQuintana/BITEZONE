<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class locationController extends Controller
{
    public function location(){
        $patientLocations = User::where('role',0)->get();
        return response()->json(['patients'=>$patientLocations]);
    }
    
}
