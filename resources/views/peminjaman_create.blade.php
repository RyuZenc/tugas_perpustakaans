@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah data Peminjaman
                    </div>
                    <div class="card-body">
                        <form action="{{ url('peminjaman', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="my-input">Tanggal</label>
                                <input id="my-input" class="form-control" type="date" name="tanggal"
                                    value="{{ old('tanggal') }}">
                                <script>
                                    document.getElementById("tgl").valueAsDate = new Date();
                                </script>
                                <span class="text-danger">{{ $errors->first('tanggal') }}</span>

                            </div>

                            <div class="form-group">
                                <label for="my-select">Anggota</label>
                                <select id="my-select" class="form-control" name="nim">
                                    <option value="">Pilih Anggota</option>
                                    @foreach ($list_anggota as $id => $a)
                                        <option value="{{ $id }}" @selected($id == old('nim'))>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('nim') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-select">Buku</label>
                                <select id="my-select" class="form-control" name="kode_buku">
                                    <option value="">Pilih buku</option>
                                    @foreach ($list_buku as $id => $a)
                                        <option value="{{ $id }}" @selected($id == old('kode_buku'))>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('kode_buku') }}</span>
                            </div>


                    </div>
                    <div class="card-footer">

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
