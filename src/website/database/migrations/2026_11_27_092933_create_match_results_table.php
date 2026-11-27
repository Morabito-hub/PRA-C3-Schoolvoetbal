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
        Schema::disableForeignKeyConstraints();

        Schema::create('match_results', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('match_id')->unique();
            $table->foreign('match_id')->references('id')->on('matches');
            $table->tinyInteger('home_score');
            $table->tinyInteger('away_score');
            $table->bigInteger('no_show_team_id')->nullable();
            $table->foreign('no_show_team_id')->references('id')->on('teams');
            $table->bigInteger('recorded_by_user_id');
            $table->foreign('recorded_by_user_id')->references('id')->on('users');
            $table->dateTime('recorded_at');
            $table->timestamp('updated_at')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_results');
    }
};
