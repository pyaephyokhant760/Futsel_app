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
            $table->integer('minute');
            $table->string('home_team_goal_id')->constrained('teams')->references('id')->onDelete('cascade');
            $table->string('away_team_goal_id')->constrained('teams')->references('id')->onDelete('cascade');
            $table->string('home_team_player_id')->constrained('players')->references('id')->onDelete('cascade');;
            $table->string('away_tema_player_id')->constrained('players')->references('id')->onDelete('cascade');;
            
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
