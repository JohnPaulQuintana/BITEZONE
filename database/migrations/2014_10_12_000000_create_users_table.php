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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role')->default(0);
            $table->decimal('lat', 10, 7)->default(0);
            $table->decimal('long', 10, 7)->default(0);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->bigInteger('age');
            $table->text('address');
            $table->text('contact_no');
            $table->string('gender');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
