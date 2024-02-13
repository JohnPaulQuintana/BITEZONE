<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinic;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        $forConsultation = Consultation::where('reciever_id', Auth::user()->id)
        ->with(['senderConsultation'])//get also the info of the user who sent this
        ->get();
        // dd($forConsultation);
        return view('admin.components.main.home', ['consultations' => $forConsultation]);
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
