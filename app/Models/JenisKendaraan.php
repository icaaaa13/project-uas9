<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisKendaraan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     */
    protected $table = 'jenis_kendaraans';

    /**
     * Atribut yang dapat diisi secara massal.
     * Baris inilah yang akan memperbaiki error Anda.
     */
    protected $fillable = [
        'nama',
    ];

    /**
     * Mendefinisikan relasi "satu ke banyak" dengan model Armada.
     */
    public function armadas(): HasMany
    {
        return $this->hasMany(Armada::class, 'jenis_kendaraan_id');
    }
}
