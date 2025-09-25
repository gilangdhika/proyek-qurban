<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembagian extends Model
{
    use HasFactory;

    protected $table = 'pembagian';

    protected $fillable = [
        'penerima_id',
        'hewan_kurban_id',
        'jumlah',
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }

    public function hewanKurban()
    {
        return $this->belongsTo(HewanKurban::class);
    }
}
