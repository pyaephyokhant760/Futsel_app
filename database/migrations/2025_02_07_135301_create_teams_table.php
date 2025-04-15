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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('home_ground');
            $table->foreignId("coach_id")->constrained('coaches')->references('id')->onDelete('cascade');
            $table->foreignId("league_id")->constrained('leagues')->references('id')->onDelete('cascade');
            $table->foreignId("player_id")->constrained('players')->references('id')->onDelete('cascade');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
//
// Schema::create('goals', function (Blueprint $table) {
//     $table->id();
//     $table->foreignId("player_id")->constrained('players');
//     $table->foreignId("match_id")->constrained('matches');
//     $table->integer('minute');
//     $table->foreignId("team_id")->constrained('teams');
//     $table->string('own_goal');
//     $table->timestamps();
// });
