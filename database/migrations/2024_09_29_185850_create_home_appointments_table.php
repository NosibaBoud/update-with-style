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
        Schema::create('home_appointments', function (Blueprint $table) {
            $table->id();
         // $table->foreignId('user_id');
          //$table->foreignId('user_investigation_id');
            $table->string('gender');
            $table->foreignId('investigation_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->integer('phone_number');
           //$table->string('date_of_birth');
            $table->string('time');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_appointments');
    }
};
