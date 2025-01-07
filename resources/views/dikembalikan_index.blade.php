@extends('layouts.niceadmin')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                {{ $judul }}
                            </div>
                            <div class="col-md-4">

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Peminjam</th>
                                    <th>Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengembalian as $a)
                                    <tr>
                                        <td>{{ $a->anggota->nama_anggota }}</td>
                                        <td>{{ $a->buku->judul_buku }}</td>
                                        <td>{{ $a->tanggal }}</td>
                                        <td>{{ $a->tanggal_kembali }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $pengembalian->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
