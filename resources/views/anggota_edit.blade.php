@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Data Anggota
                    </div>
                    <div class="card-body">
                        <form action="{{ url('anggota/' . $anggota->id, []) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input id="nim" class="form-control" type="text" name="nim"
                                    value="{{ $anggota->nim ?? old('anggota') }}">
                                <span class="text-danger">{{ $errors->first('nim') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="nama_anggota">Nama Anggota</label>
                                <input id="nama_anggota" class="form-control" type="text" name="nama_anggota"
                                    value="{{ $anggota->nama_anggota ?? old('nama_anggota') }}">
                                <span class="text-danger">{{ $errors->first('nama_anggota') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                    @foreach ($list_jk as $a)
                                        <option value="{{ $a }}" @selected($a == $anggota->jenis_kelamin)>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" class="form-control" name="jurusan">
                                    @foreach ($list_jurusan as $a)
                                        <option value="{{ $a }}" @selected($a == $anggota->jurusan)>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('jurusan') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input id="no_hp" class="form-control" type="text" name="no_hp"
                                    value="{{ $anggota->no_hp ?? old('no_hp') }}">
                                <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
