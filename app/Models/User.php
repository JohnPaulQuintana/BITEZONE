<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Clinic;
use App\Models\Consultation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile',
        'role',
        'lat',
        'long',
        'firstname',
        'lastname',
        'middlename',
        'age',
        'address',
        'contact_no',
        'gender',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function clinic()
    {
        return $this->hasOne(Clinic::class, 'user_id');
    }

    public function sentConsultations(){
        return $this->hasMany(Consultation::class, 'sender_id');
    }
    // public function recieverConsultation(){
    //     return $this->hasMany(Consultation::class, 'reciever_id');
    // }
}
