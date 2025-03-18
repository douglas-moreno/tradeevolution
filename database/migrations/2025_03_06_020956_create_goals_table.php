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
            $table->foreignId('step_id')->constrained()->onDelete('cascade');
            $table->integer('contract');
            $table->decimal('daily_target', 8, 2);
            $table->decimal('weekly_target', 8, 2);
            $table->decimal('monthly_target', 8, 2);
            $table->decimal('daily_stop', 8, 2);
            $table->decimal('weekly_stop', 8, 2);
            $table->decimal('monthly_stop', 8, 2);
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
