<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    Use HasFactory;

    protected $table = 'periode';

    protected $fillable = [
        'tahun',
        'jenis_tahun',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    public function hewanKurbans()
    {
        return $this->hasMany(HewanKurban::class, 'periode_id');
    }
    
    public function penerima()
    {
        return $this->hasMany(Penerima::class, 'periode_id');
        
    }

}
