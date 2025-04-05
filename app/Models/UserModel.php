<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['username', 'nama', 'password', 'level_id', 'created_at', 'updated_at'];

    protected $hidden = ['password'];

    protected $casts = [
        'password' => 'hashed' // Laravel akan otomatis mengenkripsi password
    ];

    // Relasi ke tabel level

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    // Mendapatkan nama role
    public function getRoleName() {
        return $this->level->level_nama;
    }

    // cek apakah user memiliki role tertentu
    public function hasRole($role) {
        return $this->level->level_kode == $role;
    }

    // mendapatkan kode Role
    public function getRole() {
        return $this->level->level_kode;
    }
}
