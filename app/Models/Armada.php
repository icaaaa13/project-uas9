<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Armada extends Model
{
    use HasFactory;

    // Hanya satu deklarasi $table, sesuaikan dengan nama tabel di migration
    protected $table = 'armada';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merk',
        'nopol',
        'thn_beli',
        'deskripsi',
        'jenis_kendaraan_id',
        'kapasitas_kursi',
        'rating',
    ];

    /**
     * Mendefinisikan relasi ke model JenisKendaraan.
     */
    public function jenisKendaraan(): BelongsTo
    {
        return $this->belongsTo(JenisKendaraan::class, 'jenis_kendaraan_id');
    }
}