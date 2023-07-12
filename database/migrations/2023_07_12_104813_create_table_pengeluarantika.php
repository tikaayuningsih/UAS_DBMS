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
        Schema::create('t_pengeluarantika', function (Blueprint $table) {
            $table->string('nobk_tika', '10')->primary();
            $table->date('tanggal')->nullable();
            $table->date('noref')->nullable();
            $table->string('bagianid_tika','10')->nullable();
            $table->string('petugasid','5')->nullable();
            $table->string('keterangan','5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluarantika');
    }
};
