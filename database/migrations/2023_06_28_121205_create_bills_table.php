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
        Schema::create('bills', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid(column: 'user_id')->constrained(column: 'id')->on('users')->onDelete('cascade');
            $table->string('type', 255);
            $table->datetime('date_bill');
            $table->decimal('nominal', 10);
            $table->boolean('is_pay')->nullable()->default(false);
            $table->boolean('is_late')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
