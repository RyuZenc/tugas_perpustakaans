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

                            </div>
                            <div class="col-md-4">
                                <form class="d-flex" role="search" method="get"
                                    action="{{ url('peminjaman/cari/data', []) }}">

                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                        name="search"> &nbsp;

                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Nama Peminjam</th>
                                    <th>Judul Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $a)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ date('d M Y', strtotime($a->tanggal)) }}</td>
                                        <td>{{ $a->anggota->nama_anggota }}</td>
                                        <td>{{ $a->buku->judul_buku }}</td>
                                        </td>
                                        <td>
                                            <a href="{{ url('peminjaman/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('peminjaman/' . $a->id, []) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>

                                            <form action="{{ route('peminjaman.kembalikan', $a->id) }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Apa anda sudah yakin?');">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-success btn-sm">Dikembalikan</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $peminjaman->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
