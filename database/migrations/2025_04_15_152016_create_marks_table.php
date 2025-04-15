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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("team_id")->constrained('teams')->references('id')->onDelete('cascade');
            $table->foreignId("match_id")->constrained('matches')->references('id')->onDelete('cascade');
            $table->foreignId("goal_id")->constrained('goals')->references('id')->onDelete('cascade');
            $table->string('mark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
