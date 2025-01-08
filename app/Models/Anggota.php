<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggotas';
    protected $fillable = [
        'nim',
        'nama_anggota',
        'jenis_kelamin',
        'jurusan',
        'no_hp',
        'gambar_anggota',
    ];
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'nim', 'id');
    }
}
