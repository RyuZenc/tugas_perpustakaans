@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit data Peminjaman
                    </div>
                    <div class="card-body">
                        <form action="{{ url('peminjaman/' . $peminjaman->id, []) }}" method="POST">

                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="my-input">Tanggal</label>
                                <input id="my-input" class="form-control" type="date"
                                    name="tanggal"value="{{ date('d M Y', strtotime($peminjaman->tanggal)) ?? old('tanggal') }}">
                                <script>
                                    document.getElementById("tgl").valueAsDate = new Date();
                                </script>
                                <span class="text-danger">{{ $errors->first('tanggal') }}</span>

                            </div>

                            <div class="form-group">
                                <label for="my-select">Nama Anggota</label>
                                <select id="my-select" class="form-control" name="nim">
                                    <option value="">Pilih Nama</option>
                                    @foreach ($list_anggota as $id => $a)
                                        <option value="{{ $id }}" @selected($id == $peminjaman->nim)>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('nim') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-select">Buku</label>
                                <select id="my-select" class="form-control" name="kode_buku">
                                    <option value="">Pilih Buku</option>
                                    @foreach ($list_buku as $id => $a)
                                        <option value="{{ $id }}" @selected($id == $peminjaman->kode_buku)>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('kode_buku') }}</span>
                            </div>



                    </div>
                    <div class="card-footer">

                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
