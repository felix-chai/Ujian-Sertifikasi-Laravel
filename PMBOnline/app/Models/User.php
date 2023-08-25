<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'nama_lengkap',
        'alamat_ktp',
        'alamat_sekarang',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'nomor_telepon',
        'nomor_hp',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'kota_lahir',
        'provinsi_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password',
    ];
}
