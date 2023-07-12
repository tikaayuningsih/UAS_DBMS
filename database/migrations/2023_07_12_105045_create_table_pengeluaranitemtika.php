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
        Schema::create('t_pengeluaranitemtika', function (Blueprint $table) {
            $table->integer('id_tika')->primary();
            $table->string('nobk_tika','10')->nullable();
            $table->string('barangid_tika','10')->nullable();
            $table->integer('jumlah_tika')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaranitemtika');
    }
};
