<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Semua kolom selain 'id' bisa diisi (mass assignable)
    protected $table = 'user';
    protected $guarded = ['id'];
    protected $fillable = ['nama', 'npm', 'kelas_id'];

    // Relasi one-to-many ke UserModel
    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }
}