<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPatungan extends Model
{
    use HasFactory;

    protected $table = 'detail_patungan';

    protected $fillable = [
        'pendaftaran_id',
        'hewan_kurban_id',
        'jumlah_orang',
        'porsi',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    public function hewanKurban()
    {
        return $this->belongsTo(HewanKurban::class);
    }
}
