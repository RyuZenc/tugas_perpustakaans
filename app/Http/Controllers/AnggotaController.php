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
        $data['judul'] = "Data dimas";
        return view('anggota_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_jk'] = ['Laki-laki', 'perempuan'];
        return view('anggota_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:pasiens,nim',
            'nama_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required',

        ]);

        $pasien = new \App\Models\Anggota();
        $pasien->nim = $request->nim;
        $pasien->nama_anggota = $request->nama_anggota;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->jurusan = $request->jurusan;
        $pasien->no_hp = $request->no_hp;
        $pasien->save();
        return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
