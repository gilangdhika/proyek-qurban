<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HewanKurban extends Model
{
    use HasFactory;

    protected $table = 'hewan_kurban';

    protected $fillable = [
        'periode_id',
        'jenis_hewan',
        'harga',
        'keterangan',
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function pembagian()
    {
        return $this->hasMany(Pembagian::class);
    }

    public function detailPendaftaran()
    {
        return $this->hasMany(DetailPendaftaran::class);
    }

    public function detailPatungan()
    {
        return $this->hasMany(DetailPatungan::class);
    }
}
