<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     * Penting agar sesuai dengan nama di file migrasi.
     */
    protected $table = 'peminjamen';

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = [
        'user_id',
        'armada_id',
        'tanggal_mulai',
        'tanggal_kembali',
        'total_biaya',
        'status',
        'catatan',
    ];

    /**
     * Relasi ke model User (peminjam).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke model Armada (mobil yang dipinjam).
     */
    public function armada(): BelongsTo
    {
        return $this->belongsTo(Armada::class, 'armada_id');
    }
}
