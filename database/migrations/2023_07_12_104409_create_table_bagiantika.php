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
        Schema::create('t_bagiantika', function (Blueprint $table) {
            $table->string('bagianid_tika', '10')->primary();
            $table->string('namabagian_tika','45')->nullable();
            $table->string('kepalabagian_tika','45')->nullable();
            $table->string('telp_tika','34')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagiantika');
    }
};
