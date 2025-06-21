<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Armada extends Model
{
//HEAD
    protected $table = 'armada';

    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     * PERBAIKAN: Mengganti 'armada' menjadi 'armadas' agar sesuai dengan migrasi.
     */
    protected $table = 'armadas';

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
 //dd81d6aa82aaf381a9d2a592656892d9bfe9ad2b
}
