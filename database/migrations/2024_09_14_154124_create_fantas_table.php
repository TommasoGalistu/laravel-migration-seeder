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
        Schema::create('fantas', function (Blueprint $table) {
            $table->id();
            $table->integer('fanta_id')->unsigned();
            $table->string('team', 50);
            $table->string('player', 30);
            $table->string('player_team', 30);
            $table->string('position', 15);
            $table->string('position_mantra', 15);
            $table->integer('price');
            $table->integer('quotation');
            $table->integer('quot_mantra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fantas');
    }
};
