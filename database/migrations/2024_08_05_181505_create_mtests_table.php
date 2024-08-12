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
        Schema::create('mtests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('details');
            $table->double('price');
            $table->string('expected_time_for_test');
            $table->string('instructions');
            $table->string('status');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtests');
    }
};
