<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinic;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.components.main.home');
    }
    public function patient(){
        return view('patient.components.main.home');
    }

    public function announcementPatient(){
        return view('patient.components.main.announcement');
    }

    public function dnd(){
        return view('patient.components.main.dnd');
    }
    public function rhu(){
        return view('patient.components.main.rhu');
    }
    public function myAppointment(){
        $rhu = User::where('role', 1)
        ->latest()
        ->with(['clinic'])
        ->get(['id', 'firstname', 'lastname', 'address', 'lat', 'long', 'gender', 'contact_no']);
        // dd($rhu);
        return view('patient.components.main.appointment',['rhus'=>$rhu]);
    }
}
