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

        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('jumlah_kurban');
            $table->integer('jumlah_harga');
            $table->string('bukti_transfer')->nullable();
            $table->enum('jenis', ['non patungan', 'patungan']);
            $table->integer('kuota')->nullable();
            $table->enum('status', [
                'dipesan',
                'belum disembelih',
                'disembelih',
                'sudah disembelih',
                'pengolahan',
                'dikemas',
                'dikirim'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
