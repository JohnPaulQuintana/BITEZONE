<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ConsultationFormRequest;

class ConsultationController extends Controller
{
    /**
     * Process the user's consultation information.
     */
    public function processForm(ConsultationFormRequest $request): RedirectResponse
    {

        try {
            $validatedData = $request->validated();

            
            Consultation::create([
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
            return Redirect::route('appointment')->with('status', $statusMessage);
        } catch (\Throwable $th) {
             // If validation fails or any other exception occurs
             $errorMessage = (object)['message' => 'Appointment encountered an error.', 'is_open' => false];
            return Redirect::back()->withErrors(['consultationError' => json_encode($errorMessage)]);
        }

       
    }
}
