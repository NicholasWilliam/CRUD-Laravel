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
        Schema::create('univs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_univ');
            $table->foreignId('negara_id');
            $table->foreignId('kota_id');
            $table->text('alamat_univ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('univs');
    }
};