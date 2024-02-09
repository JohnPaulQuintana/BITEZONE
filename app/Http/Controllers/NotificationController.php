<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotification(){
        $notif = Notification::where('read',0)->latest()->get();
        return response()->json(['notifications'=>$notif]);
    }

    public function updateNotification(Request $request){
        $updateNotif = Notification::where('id',$request->input('id'))->update(['read' =>1]);
        // return redirect()->route('administrator.dashboard.incoming.request')->with(['search_id'=>$request->input('id')]);
        return response()->json(['notification'=>'success'],200);
    }
}
