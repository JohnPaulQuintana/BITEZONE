<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClinicUpdateRequest;
use App\Models\Clinic;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class ClinicController extends Controller
{
    /**
     * Update the user's profile information.
     */
    public function update(ClinicUpdateRequest $request): RedirectResponse
    {
        // Retrieve the clinic record for the authenticated user
        $clinic = Clinic::where('user_id', Auth::user()->id)->first();

        // If the clinic record does not exist, create a new one
        if (!$clinic) {
            $clinic = new Clinic(['user_id' => Auth::user()->id]);
        }

        // Validate the request, including the file upload
        $validatedData = $request->validated();

        // Check if a new clinic picture has been uploaded
        if ($request->hasFile('clinic_profile')) {
            // Store the uploaded file and update the clinic's profile picture
            $path = $request->file('clinic_profile')->store('clinics', 'public');
            $validatedData['clinic_profile'] = $path;

            // If the clinic already has a profile picture, delete the old one
            if ($clinic->clinic_profile) {
                // If you want to delete the old profile picture, you can uncomment the line below
                Storage::disk('public')->delete($clinic->clinic_profile);
            }
        }

        // Update the clinic model with the validated data
        $clinic->fill($validatedData);
        $clinic->save();

        return Redirect::route('profile.edit')->with('status', 'Profile updated successfully.');
    }
}
