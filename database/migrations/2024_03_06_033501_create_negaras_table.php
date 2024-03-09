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
        Schema::create('negaras', function (Blueprint $table) {
            $table->id();
            $table->string('nama_negara');
            $table->text('deskripsi_negara');
            $table->string('kodewarna_negara');
            $table->string('gambar_negara');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('negaras');
    }
};