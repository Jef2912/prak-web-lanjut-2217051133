<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Semua kolom selain 'id' bisa diisi (mass assignable)
    protected $guarded = ['id'];

    // Relasi one-to-many ke UserModel
    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}