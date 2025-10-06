<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel
    protected $table = 'users';

    // Primary key
    protected $primaryKey = 'id_user';

    // Tidak ada created_at & updated_at di migration
    public $timestamps = false;

    // Kolom yang bisa diisi mass assignment
    protected $fillable = [
        'nm_user',
        'email',
        'pass',
        'grup'
    ];

    // Kolom yang disembunyikan saat di-serialize
    protected $hidden = [
        'pass'
    ];

    // Casting atribut
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }
}
