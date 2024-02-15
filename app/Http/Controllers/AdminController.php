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
    public function myAppointment(){
        $myRecords = Consultation::join('users', 'consultations.reciever_id', '=', 'users.id')
        ->where('consultations.sender_id', Auth::user()->id)
        ->latest('consultations.created_at')
        ->select('consultations.*', 'users.firstname as rhu_firstname', 'users.lastname as rhu_lastname', 'users.middlename as rhu_middlename', 'users.address as rhu_address')
        ->get();
        return view('patient.components.main.appointment')->with(['myRecords' => $myRecords]);
    }
    public function rhu(){
        $rhu = User::where('role', 1)
        ->latest()
        ->with(['clinic'])
        ->get(['id', 'firstname', 'lastname', 'address', 'lat', 'long', 'gender', 'contact_no']);
        // dd($rhu);
        return view('patient.components.main.rhu',['rhus'=>$rhu]);
    }
}
