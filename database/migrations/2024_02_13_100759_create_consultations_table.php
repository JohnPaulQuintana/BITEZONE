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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            // Add the first foreign key column
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('set null');

            // Add the second foreign key column
            $table->unsignedBigInteger('reciever_id')->nullable();
            $table->foreign('reciever_id')->references('id')->on('users')->onDelete('set null');

            $table->text('fullname');
            $table->bigInteger('age');
            $table->string('sex');
            $table->date('date_submitted');
            $table->date('date_of_birth');
            $table->string('contact_no');
            $table->text('address');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
