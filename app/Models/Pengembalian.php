<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalians';

    public $timestamps = false;

    protected $fillable = [
        'nim',
        'kode_buku',
        'tanggal',
        'tanggal_kembali',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'nim', 'id'); // 'nim' adalah foreign key
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'kode_buku', 'id'); // 'kode_buku' adalah foreign key
    }
}
