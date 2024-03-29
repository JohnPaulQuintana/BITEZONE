<?php

namespace App\Http\Controllers\Auth;

use App\Events\NotifyEvent;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'age' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'contact_no' => ['required', 'string'],
            'gender' => ['required'],
            'username' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'coordinates' => ['required'],
        ]);

        $user = User::create([
            'role' => $request->type === 'Patient' ? 0 : 1,//default 1: clinic
            'lat' => explode(',', $request->coordinates)[0],
            'long' => explode(',', $request->coordinates)[1],
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'age' => $request->age,
            'address' => $request->address,
            'contact_no' => $request->contact_no,
            'gender' => $request->gender,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $newUser = [
            'id' => $user->id,
            'role' => $user->role,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'middlename' => $user->middlename,
        ];
        event(new NotifyEvent($newUser));
        

        event(new Registered($user));

        // stored notif for new registered users
        

        Auth::login($user);

        switch ($user->role) {
            case 0:
                $notifyAdmin = Notification::create([
                    'fullname' => $user->firstname.' '.$user->lastname,
                    'action' => "A new patient has been registered"
                ]);
                return redirect(RouteServiceProvider::PATIENT_DASHBOARD);
                
            
            default:
                return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
                
        }
        
       
    }
}
