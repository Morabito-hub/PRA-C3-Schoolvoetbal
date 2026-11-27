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

        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tournament_category_id');
            $table->foreign('tournament_category_id')->references('id')->on('tournament_categories');
            $table->bigInteger('pool_id')->nullable();
            $table->foreign('pool_id')->references('id')->on('pools');
            $table->bigInteger('tournament_date_id')->nullable();
            $table->foreign('tournament_date_id')->references('id')->on('tournament_dates');
            $table->bigInteger('home_team_id');
            $table->foreign('home_team_id')->references('id')->on('teams');
            $table->bigInteger('away_team_id');
            $table->foreign('away_team_id')->references('id')->on('teams');
            $table->dateTime('starts_at')->nullable();
            $table->string('field_name', 100)->nullable();
            $table->dateTime('published_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
