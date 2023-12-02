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
        Schema::create('_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_hp');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_mahasiswas');
    }
};
