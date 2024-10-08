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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 150);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->time('departure_time');
            $table->time('arrival_time');

            $table->string('train_code', 150);
            $table->tinyInteger('number_carriages');
            $table->tinyInteger('on_time');
            $table->tinyInteger('cancelled');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
