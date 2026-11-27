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

        Schema::create('school_registrations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->bigInteger('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
            $table->string('status', 30)->default('submitted');
            $table->dateTime('registered_at');
            $table->string('contact_name', 255);
            $table->string('contact_email', 255);
            $table->string('contact_phone', 50)->nullable();
            $table->string('referee_name', 255)->nullable();
            $table->string('referee_contact', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unique(['school_id', 'tournament_id']);
            $table->index('tournament_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_registrations');
    }
};
