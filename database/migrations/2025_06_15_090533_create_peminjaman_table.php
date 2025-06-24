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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
//HEAD:database/migrations/2025_06_15_090533_create_peminjaman_table.php
            $table->string('nama_peminjam', 45);
            $table->string('ktp_peminjam', 20);
            $table->string('keperluan_pinjam', 100);
            $table->date('mulai');
            $table->date('selesai');
            $table->double('biaya');
            $table->foreignId('armada_id')->constrained('armada');
            $table->string('komentar_peminjam', 100)->nullable();
            $table->string('status_pinjam', 20);

            // Relasi ke tabel users (peminjam)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Relasi ke tabel armadas (mobil yang dipinjam)
            $table->foreignId('armada_id')->constrained('armadas')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_kembali');
            $table->decimal('total_biaya', 10, 2);
            $table->enum('status', ['dipesan', 'berjalan', 'selesai', 'dibatalkan'])->default('dipesan');
//dd81d6aa82aaf381a9d2a592656892d9bfe9ad2b:database/migrations/2025_06_15_090533_create_peminjamen_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
