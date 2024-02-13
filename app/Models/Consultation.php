<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['sender_id', 'reciever_id', 'fullname', 'age', 'sex', 'date_submitted','date_of_birth', 'contact_no', 'address', 'comments'];

    public function senderConsultation()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    // public function reciever()
    // {
    //     return $this->belongsTo(User::class, 'reciever_id');
    // }
}

