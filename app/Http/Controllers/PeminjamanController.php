<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['peminjaman'] = \App\Models\Peminjaman::paginate(5);
        $data['judul'] = 'Data Peminjaman';
        return view('peminjaman_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_anggota'] =
            \App\Models\Anggota::selectRaw("id,concat(nim,'-',nama_anggota) as tampil")
            ->pluck('tampil', 'id');

        $data['list_buku'] =
            \App\Models\Buku::selectRaw("id,concat(kode_buku,'-',judul_buku) as tampil")
            ->pluck('tampil', 'id');

        return view('peminjaman_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'nim' => 'required',
            'kode_buku' => 'required',
        ]);

        $peminjaman = new \App\Models\Peminjaman();
        $peminjaman->tanggal = $request->tanggal;
        $peminjaman->nim = $request->nim;
        $peminjaman->kode_buku = $request->kode_buku;
        $peminjaman->save();
        return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $data['peminjaman'] = \App\Models\Peminjaman::findOrFail($id);

        $data['list_anggota'] =
            \App\Models\Anggota::selectRaw("id,concat(nim,'-',nama_anggota)as tampil")
            ->pluck('tampil', 'id');

        $data['list_buku'] =
            \App\Models\Buku::selectRaw("id,concat(kode_buku,'-',judul_buku)as tampil")
            ->pluck('tampil', 'id');

        return view('peminjaman_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'nim' => 'required',
            'kode_buku' => 'required',

        ]);
        $peminjaman = \App\Models\Peminjaman::findOrFail($id);
        $peminjaman->tanggal = $request->tanggal;
        $peminjaman->nim = $request->nim;
        $peminjaman->kode_buku = $request->kode_buku;
        $peminjaman->save();

        return redirect('/peminjaman')->with('pesan', 'Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman = \App\Models\Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
