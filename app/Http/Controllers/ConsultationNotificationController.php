<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ConsultationNotification;

class ConsultationNotificationController extends Controller
{
    public function getConsultationNotif(){
        $consultationNotif = ConsultationNotification::where('reciever_id', Auth::user()->id)->latest()->get();

        return response()->json(['consultationNotifs' => $consultationNotif]);
    }

    public function updateNotificationAdmin(Request $request){
        $deleteNotif = ConsultationNotification::where('id', $request->input('id'))->delete();
        // return redirect()->route('administrator.dashboard.incoming.request')->with(['search_id'=>$request->input('id')]);
        return response()->json(['notification'=>'success'],200);
    }
}
