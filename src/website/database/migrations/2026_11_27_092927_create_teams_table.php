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

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('school_registration_id');
            $table->foreign('school_registration_id')->references('id')->on('school_registrations');
            $table->bigInteger('tournament_category_id');
            $table->foreign('tournament_category_id')->references('id')->on('tournament_categories');
            $table->string('name', 255);
            $table->tinyInteger('player_count')->comment('Validate to be between 8 and 12');
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
        Schema::dropIfExists('teams');
    }
};
