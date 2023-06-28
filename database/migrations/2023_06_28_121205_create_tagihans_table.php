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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('warga_id')->nullable();
            $table->foreign('warga_id')->references('id')->on('warga')->onDelete('cascade');
            $table->date('tgl_tagihan');
            $table->decimal('nominal', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};
