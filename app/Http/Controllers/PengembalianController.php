<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;

class PengembalianController extends Controller
{
        public function index()
        {
                $data['judul'] = 'Data Pengembalian';
                $pengembalian = Pengembalian::with(['anggota', 'buku'])->orderBy('id', 'desc')->paginate(5);
                $data['pengembalian'] = $pengembalian;

                return view('pengembalian_index', compact('pengembalian'), $data);
        }

        public function laporan()
        {
                $data['pengembalian'] = \App\Models\Pengembalian::all();
                $data['judul'] = 'Laporan Data Pengembalian';

                return view('pengembalian_laporan', $data);
        }
}
