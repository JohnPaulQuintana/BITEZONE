<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $clinic = Clinic::where('user_id', Auth::user()->id)->first();
        return view('admin.components.main.profile', [
            'user' => $request->user(),
            'clinic' => $clinic,
        ]);
    }
    /**
     * Display the user's profile form patient.
     */
    public function editPatient(Request $request): View
    {
        return view('patient.components.main.profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // dd($user);
        // Validate the request, including the file upload
        $validatedData = $request->validated();

        // Check if a new profile picture has been uploaded
        if ($request->hasFile('profile')) {
            // Store the uploaded file and update the user's profile picture
            $path = $request->file('profile')->store('profiles', 'public');
            $validatedData['profile'] = $path;

            // If the user already has a profile picture, delete the old one
            if ($user->profile) {
                // If you want to delete the old profile picture, you can uncomment the line below
                Storage::disk('public')->delete($user->profile);
            }

            
        }

        // Update the user model with the validated data
        $user->fill($validatedData);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated successfully.');
    }
    /**
     * Update the user's profile information Patient.
     */
    public function updatePatient(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // dd($user);
        // Validate the request, including the file upload
        $validatedData = $request->validated();

        // Check if a new profile picture has been uploaded
        if ($request->hasFile('profile')) {
            // Store the uploaded file and update the user's profile picture
            $path = $request->file('profile')->store('profiles', 'public');
            $validatedData['profile'] = $path;

            // If the user already has a profile picture, delete the old one
            if ($user->profile) {
                // If you want to delete the old profile picture, you can uncomment the line below
                Storage::disk('public')->delete($user->profile);
            }

            
        }

        // Update the user model with the validated data
        $user->fill($validatedData);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit.patient')->with('status', 'profile-updated successfully.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
