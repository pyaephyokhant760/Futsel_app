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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId("match_id")->constrained('matches')->references('id')->onDelete('cascade');
            $table->foreignId("team_id")->constrained('teams')->references('id')->onDelete('cascade');
            $table->foreignId("player_id")->constrained('players')->references('id')->onDelete('cascade');
            $table->integer('minute');
            $table->ENUM('type', ['goal', 'penalty']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
