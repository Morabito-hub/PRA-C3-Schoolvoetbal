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

        Schema::create('category_date_plans', function (Blueprint $table) {
            $table->bigInteger('tournament_category_id');
            $table->foreign('tournament_category_id')->references('id')->on('tournament_categories');
            $table->bigInteger('tournament_date_id');
            $table->foreign('tournament_date_id')->references('id')->on('tournament_dates');
            $table->boolean('is_confirmed')->default(0);
            $table->primary(['tournament_category_id', 'tournament_date_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_date_plans');
    }
};
