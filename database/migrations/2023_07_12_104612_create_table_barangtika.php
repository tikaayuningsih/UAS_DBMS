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
        Schema::create('t_barangtika', function (Blueprint $table) {
            $table->string('barangid_tika', '10')->primary();
            $table->string('namabarang_tika','45')->nullable();
            $table->string('satuan_tika','45')->nullable();
            $table->string('harga_tika','34')->nullable();
            $table->string('kategoriid','5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barangtika');
    }
};
