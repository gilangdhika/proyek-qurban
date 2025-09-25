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
    Schema::create('periodes', function (Blueprint $table) {
    $table->id();
    $table->integer('tahun');
    $table->enum('jenis_tahun', ['Masehi', 'Hijriyah']);
    $table->date('tanggal_mulai');
    $table->date('tanggal_selesai');
    $table->enum('status', ['aktif', 'nonaktif']);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodes');
    }
};
