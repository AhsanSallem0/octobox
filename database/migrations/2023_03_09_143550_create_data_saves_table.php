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
        Schema::create('data_saves', function (Blueprint $table) {
            $table->id();

            $table->string('fullName')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('shirtType')->nullable();

            $table->string('shirtColor')->nullable();
            $table->string('xl')->nullable();
            $table->string('l')->nullable();
            $table->string('m')->nullable();
            $table->string('s')->nullable();
            $table->string('xs')->nullable();
            $table->string('photo')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_saves');
    }
};
