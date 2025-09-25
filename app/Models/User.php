<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }

    // 1 User bisa punya banyak HewanKurban
    public function hewanKurbans()
    {
        return $this->hasMany(HewanKurban::class);
    }

    // 1 User bisa jadi kurir di banyak Pembagian
    public function pembagiansSebagaiKurir()
    {
        return $this->hasMany(Pembagian::class, 'kurir_id');
    }

    // 1 User bisa menjadi penerima
    public function penerima()
    {
        return $this->hasOne(Penerima::class);
    }

    // 1 User bisa ikut banyak DetailPatungan
    public function detailPatungans()
    {
        return $this->hasMany(DetailPatungan::class);
    }
}
