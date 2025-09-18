<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;


    protected $table = 'pendaftaran';

    // kolom yang bisa diisi (sesuaikan dengan tabelmu)
    protected $fillable = [
        'user_id',
        'periode_id',
        'jumlah_kurban',
        'jumlah_harga',
        'status',
        'bukti_tf',
    ];

    // /**
    //  * Relasi ke User (peserta/shohibul qurban)
    //  */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke Periode Qurban
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id');
    }

    /**
     * Relasi ke Detail Pendaftaran (misalnya berisi hewan, jumlah, dll)
     */
    public function details()
    {
        return $this->hasMany(DetailPendaftaran::class, 'pendaftaran_id');
    }
}
