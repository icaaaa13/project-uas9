<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisKendaraan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kendaraan';

    protected $fillable = [
        'nama',
    ];

    public function armadas(): HasMany
    {
        return $this->hasMany(Armada::class, 'jenis_kendaraan_id');
    }
}