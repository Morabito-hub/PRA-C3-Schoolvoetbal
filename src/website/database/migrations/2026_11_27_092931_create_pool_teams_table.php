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

        Schema::create('pool_teams', function (Blueprint $table) {
            $table->bigInteger('pool_id');
            $table->foreign('pool_id')->references('id')->on('pools');
            $table->bigInteger('team_id')->unique();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->primary(['pool_id', 'team_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pool_teams');
    }
};
