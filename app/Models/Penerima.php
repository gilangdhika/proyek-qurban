<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    protected $table = 'penerima';

    protected $fillable = [
        'periode_id',
        'nama',
        'alamat',
        'kontak',
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function pembagian()
    {
        return $this->hasMany(Pembagian::class);
    }
}
