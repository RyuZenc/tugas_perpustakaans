<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjamans';

    public $timestamps = false;

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'nim', 'id'); // 'nim' adalah foreign key
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'kode_buku', 'id'); // 'kode_buku' adalah foreign key
    }
}
