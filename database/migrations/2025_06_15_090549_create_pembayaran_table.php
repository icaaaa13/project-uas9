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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
//HEAD:database/migrations/2025_06_15_090549_create_pembayaran_table.php
            $table->date('tanggal');
            $table->double('jimlah_bayar');
            $table->unsignedBigInteger('peminjam_id');
            $table->foreign('peminjam_id')->references('id')->on('peminjaman');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('armada_id')->constrained('armadas')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->decimal('total_harga', 10, 2);
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status_pembayaran', ['pending', 'lunas', 'dibatalkan'])->default('pending');
            $table->string('metode_pembayaran')->nullable();
//dd81d6aa82aaf381a9d2a592656892d9bfe9ad2b:database/migrations/2025_06_15_090549_create_pembayarans_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD:database/migrations/2025_06_15_090549_create_pembayaran_table.php
        Schema::dropIfExists('pembayaran');
=======
        // PERBAIKAN: Mengganti 'armadas' menjadi 'pembayarans'
        Schema::dropIfExists('pembayarans');
>>>>>>> dd81d6aa82aaf381a9d2a592656892d9bfe9ad2b:database/migrations/2025_06_15_090549_create_pembayarans_table.php
    }
};
