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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            // Relasi ke tabel users (peminjam)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Relasi ke tabel armadas (mobil yang dipinjam)
            $table->foreignId('armada_id')->constrained('armadas')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_kembali');
            $table->decimal('total_biaya', 10, 2);
            $table->enum('status', ['dipesan', 'berjalan', 'selesai', 'dibatalkan'])->default('dipesan');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
