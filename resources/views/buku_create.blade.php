@extends('layouts.niceadmin')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Buku
                    </div>
                    <div class="card-body">
                        <form action="{{ url('buku', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="kode_buku">Kode Buku</label>
                                <input id="kode_buku" class="form-control" type="text" name="kode_buku"
                                    value="{{ old('kode_buku') }}">
                            </div>

                            <div class="form-group">
                                <label for="judul_buku">Judul Buku</label>
                                <input id="judul_buku" class="form-control" type="text" name="judul_buku"
                                    value="{{ old('judul_buku') }}">
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis Buku</label>
                                <input id="penulis" class="form-control" type="text" name="penulis"
                                    value="{{ old('penulis') }}">
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit Buku</label>
                                <input id="penerbit" class="form-control" type="text" name="penerbit"
                                    value="{{ old('penerbit') }}">
                            </div>

                            <div class="form-group">
                                <label for="tahun">Tahun Penerbit</label>
                                <select id="tahun" class="form-control" name="tahun"
                                    style="max-width: 200px; max-height: 200px; overflow-y: auto;">
                                    <option value="" disabled selected>Pilih Tahun</option>
                                    <script>
                                        const select = document.getElementById("tahun");
                                        const currentYear = new Date().getFullYear();
                                        const startYear = 1900;
                                        for (let year = currentYear; year >= startYear; year--) {
                                            const option = document.createElement("option");
                                            option.value = year;
                                            option.textContent = year;
                                            select.appendChild(option);
                                        }
                                    </script>
                                </select>
                                <span class="text-danger">{{ $errors->first('tahun') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input id="stok" class="form-control" type="text" name="stok"
                                    value="{{ old('stok') }}">
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
