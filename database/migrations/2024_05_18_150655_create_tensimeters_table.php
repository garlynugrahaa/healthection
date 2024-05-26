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
        Schema::create('tensimeters', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id')->nullable();
            $table->double('bpm', 15, 2);
            $table->double('systolic', 15, 2);
            $table->double('diastolic', 15, 2);
            $table->timestamps();

            $table->index('user_id')->references('id')->on('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tensimeters');
    }
};
