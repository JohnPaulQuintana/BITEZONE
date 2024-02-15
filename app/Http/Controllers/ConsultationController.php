<?php

namespace App\Http\Controllers;

use App\Events\NotifyEvent;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ConsultationFormRequest;
use App\Models\ConsultationNotification;

class ConsultationController extends Controller
{
    /**
     * Process the user's consultation information.
     */
    public function processForm(ConsultationFormRequest $request): RedirectResponse
    {

        try {
            $validatedData = $request->validated();           
            $notifyUser = Consultation::create([
                'sender_id' => Auth::user()->id,
                'reciever_id' => $validatedData['reciever_id'],
                'fullname' => $validatedData['firstname'] . ' ' . $validatedData['middlename'] . ' ' . $validatedData['lastname'],
                'age' => $validatedData['age'],
                'sex' => $validatedData['sex'],
                'date_submitted' => $validatedData['date'],
                'date_of_birth' => $validatedData['dateofbirth'],
                'contact_no' => $validatedData['contact'],
                'address' => $validatedData['address'],
                'comments' => $validatedData['animal_bite_comments'],
            ]);
            $statusMessage = 'Appointment is submitted successfully.';

            // get the sender profile
            $n = [
                'id' => $notifyUser->reciever_id,
                'role' => 1,// for admin notif
                'firstname' => $validatedData['firstname'],
                'lastname' => $validatedData['lastname'],
                'middlename' => $validatedData['middlename'],
            ];

            event(new NotifyEvent($n));

            $notifyAdmin = ConsultationNotification::create([
                'reciever_id' => $notifyUser->reciever_id,
                'sender_name' => $notifyUser->fullname,
                'notification_message' => $notifyUser->fullname." is sending a consultation form to you.",
                'notification_type' => 'consulation',
                'notification_profile' => Auth::user()->profile,
            ]);
            
            return Redirect::route('rhu')->with('status', $statusMessage);
        } catch (\Throwable $th) {
             // If validation fails or any other exception occurs
             $errorMessage = (object)['message' => 'Appointment encountered an error.', 'is_open' => false];
            return Redirect::back()->withErrors(['consultationError' => json_encode($errorMessage)]);
        }

       
    }
}
