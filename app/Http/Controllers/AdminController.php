<?php

namespace App\Http\Controllers;

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
        return view('patient.components.main.appointment');
    }
}
