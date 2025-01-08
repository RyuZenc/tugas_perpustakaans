<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penulis',
        'penerbit',
        'tahun',
        'stok',
        'gambar_buku',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'kode_buku', 'id');
    }
}
