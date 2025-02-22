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
                        <form action="{{ url('anggota', []) }}" method="POST" enctype="multipart/form-data">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input id="nim" class="form-control" type="text" name="nim"
                                    value="{{ old('nim') }}">
                                <span class="text-danger">{{ $errors->first('nim') }}</span>

                            </div>

                            <div class="form-group">
                                <label for="nama_anggota">Nama Anggota</label>
                                <input id="nama_anggota" class="form-control" type="text" name="nama_anggota"
                                    value="{{ old('nama_anggota') }}">
                                <span class="text-danger">{{ $errors->first('nama_anggota') }}</span>

                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                    <option value="">---</option>
                                    @foreach ($list_jk as $a)
                                        <option value="{{ $a }}" @selected($a == old('jenis_kelamin'))>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" class="form-control" type="text" name="jurusan">
                                    <option value="">---</option>
                                    @foreach ($list_jurusan as $a)
                                        <option value="{{ $a }}" @selected($a == old('jurusan'))>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('jurusan') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No Hp</label></label>
                                <input id="no_hp" class="form-control" type="text" name="no_hp"
                                    value="{{ old('no_hp') }}">
                                <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="gambar_anggota">Upload foto diri</label>
                                <input id="gambar_anggota" class="form-control" type="file" name="gambar_anggota"
                                    accept="image/*" value={{ old('gambar_anggota') }}>
                                <span class="text-danger">{{ $errors->first('gambar_anggota') }}</span>
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
