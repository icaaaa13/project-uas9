<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'armada_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_harga',
        'bukti_pembayaran',
        'status_pembayaran',
        'metode_pembayaran',
    ];

    /**
     * Mendefinisikan relasi ke model User.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Mendefinisikan relasi ke model Armada.
     */
    public function armada(): BelongsTo
    {
        return $this->belongsTo(Armada::class, 'armada_id');
    }
}
