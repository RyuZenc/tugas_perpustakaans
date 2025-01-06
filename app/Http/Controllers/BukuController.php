<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['buku'] = Buku::orderBy('id', 'desc')->paginate(3);
        $data['judul'] = "Data Buku";
        return view('buku_index', $data);
    }

    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['buku'] = \App\Models\Buku::where('judul_buku', 'like', '%' . $cari . '%')
            ->orwhere('penulis', 'like', '%' . $cari . '%')->paginate(3);
        $data['judul'] = 'Data Buku';
        return view('buku_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['buku'] = Buku::paginate(3);
        $data['judul'] = "Data Buku";
        return view('buku_create', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:bukus,kode_buku',
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'gambar_buku' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi Gambar
        ]);

        $buku = new \App\Models\Buku();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        if ($request->hasFile('gambar_buku')) {
            $filePath = $request->file('gambar_buku')->store('public/gambar_buku'); // Save in storage/app/public/gambar_buku
            $buku->gambar_buku = $filePath; // Save the path to the database
        }

        $buku->save();
        return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['buku'] = \App\Models\Buku::findOrFail($id);
        $data['judul'] = "Data Buku";
        return view('buku_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'kode_buku' => 'required|unique:bukus,kode_buku,' . $id,
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'gambar_buku' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $buku = \App\Models\Buku::findOrFail($id);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        if ($request->hasFile('gambar_buku')) {

            if ($buku->gambar_buku && Storage::exists($buku->gambar_buku)) {
                Storage::delete($buku->gambar_buku);
            }
            $filePath = $request->file('gambar_buku')->store('public/gambar_buku');
            $buku->gambar_buku = $filePath;
        }

        $buku->save();

        return redirect('/buku')->with('pesan', 'Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        $buku->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
        $data['buku'] = \App\Models\Buku::all();
        $data['judul'] = 'Laporan Data Buku';
        return view('buku_laporan', $data);
    }
}
