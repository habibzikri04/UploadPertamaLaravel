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
        Schema::create('_mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_mk');
            $table->string('nama_mk');
            $table->integer('sks');
            $table->string('semester');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_mata_kuliahs');
    }
};
