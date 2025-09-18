<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPendaftaran extends Model
{
    use HasFactory;

    protected $table = 'detail_pendaftaran'; // nama tabel
    protected $fillable = [
        'pendaftaran_id',
        'hewan_id',
        'jumlah',
        'harga'
    ];

    // Relasi ke Pendaftaran
    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'pendaftaran_id');
    }

}
