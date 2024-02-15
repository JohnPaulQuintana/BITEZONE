<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationNotification extends Model
{
    use HasFactory;

    protected $fillable = ['reciever_id', 'sender_name', 'notification_message', 'notification_type', 'notification_profile'];
}
