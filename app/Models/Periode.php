<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $table = 'periode'; // nama tabel
    protected $fillable = [
        'tahun',
        'jenis_tahun',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    // Relasi ke Pendaftaran
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class, 'periode_id');
    }
}
