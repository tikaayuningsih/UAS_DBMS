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
        Schema::create('t_petugastika', function (Blueprint $table) {
            $table->integer('petugasid_tika')->primary();
            $table->string('namapetugas_tika','35')->nullable();
            $table->string('alamat_tika','45')->nullable();
            $table->string('handphone_tika','15')->nullable();
            $table->string('password','10')->nullable();
            $table->string('level','20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_petugastika');
    }
};
