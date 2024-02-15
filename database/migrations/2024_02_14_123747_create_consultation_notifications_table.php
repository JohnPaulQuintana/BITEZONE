<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultation_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reciever_id')->nullable();
            $table->foreign('reciever_id')->references('id')->on('users')->onDelete('set null');
            $table->text('sender_name');
            $table->text('notification_message');
            $table->text('notification_type');
            $table->text('notification_profile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_notifications');
    }
};
