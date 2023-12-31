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
        Schema::create('status_bills', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid(column: 'user_id')->constrained(column: 'id')->on('users')->onDelete('cascade');
            $table->foreignUuid(column: 'bill_id')->constrained(column: 'id')->on('bills')->onDelete('cascade');
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
        Schema::dropIfExists('status_bills');
    }
};
