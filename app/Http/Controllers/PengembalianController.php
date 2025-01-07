<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $data['pengembalian'] = Pengembalian::orderBy('id', 'desc')->paginate(5);
        $data['judul'] = 'Data Pengembalian';
        $pengembalian = Pengembalian::with(['anggota', 'buku'])->paginate(5);;
        return view('dikembalikan_index', compact('pengembalian'), $data);
    }

    public function laporan()
    {
        $data['pengembalian'] = \App\Models\Pengembalian::all();
        $data['judul'] = 'Laporan Data Pengembalian';
        return view('dikembalikan_laporan', $data);
    }
}
