<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['anggota'] = Anggota::paginate(3);
        $data['judul'] = "Data Buku";
        return view('anggota_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_jk'] = ['Laki-laki', 'Perempuan'];
        $data['list_jurusan'] = ['Teknik Informatika', 'Sistem Informasi', 'Sistem Komputer'];
        return view('anggota_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:anggotas,nim',
            'nama_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required',

        ]);

        $anggota = new \App\Models\Anggota();
        $anggota->nim = $request->nim;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->jurusan = $request->jurusan;
        $anggota->no_hp = $request->no_hp;
        $anggota->save();
        return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $i)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['anggota'] = \App\Models\Anggota::findOrFail($id);
        $data['list_jk'] = ['Laki-laki', 'Perempuan'];
        $data['list_jurusan'] = ['Teknik informatika', 'Sistem informasi', 'Sistem Komputer'];
        return view('anggota_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nim' => 'required|unique:anggotas,nim,' . $id,
            'nama_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required',
        ]);
        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->nim = $request->nim;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->jurusan = $request->jurusan;
        $anggota->no_hp = $request->no_hp;
        $anggota->save();

        return redirect('/anggota')->with('pesan', 'Data sudah Diupdate');
    }

    public function destroy(string $id)
    {
        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
