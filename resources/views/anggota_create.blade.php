@extends('layouts.niceadmin')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data anggota
                    </div>
                    <div class="card-body">
                        <form action="{{ url('anggota', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input id="nim" class="form-control" type="text" name="nim"
                                    value="{{ old('nim') }}">

                            </div>

                            <div class="form-group">
                                <label for="nama_anggota">Nama Anggota</label>
                                <input id="nama_anggota" class="form-control" type="text" name="nama_anggota"
                                    value="{{ old('nama_anggota') }}">

                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                    @foreach ($list_jk as $a)
                                        <option value="{{ $a }}" @selected($a == old('jenis_kelamin'))>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" class="form-control" type="text" name="jurusan">
                                    @foreach ($list_jurusan as $a)
                                        <option value="{{ $a }}" @selected($a == old('jurusan'))>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="no_hp">No Hp</label></label>
                                <input id="no_hp" class="form-control" type="text" name="no_hp"
                                    value="{{ old('no_hp') }}">
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
