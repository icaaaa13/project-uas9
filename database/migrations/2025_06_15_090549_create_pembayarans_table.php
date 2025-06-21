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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('armada_id')->constrained('armadas')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->decimal('total_harga', 10, 2);
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status_pembayaran', ['pending', 'lunas', 'dibatalkan'])->default('pending');
            $table->string('metode_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // PERBAIKAN: Mengganti 'armadas' menjadi 'pembayarans'
        Schema::dropIfExists('pembayarans');
    }
};
