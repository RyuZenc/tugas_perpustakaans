@extends('layouts.niceadmin')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                    action="{{ url('anggota/cari/data', []) }}">

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
                                    <th>NIM</th>
                                    <th>Nama Anggota</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>No hp</th>
                                    <th>Foto profil</th>
                                    <th>Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->nim }}</td>
                                        <td>{{ $a->nama_anggota }}</td>
                                        <td>{{ $a->jenis_kelamin }}</td>
                                        <td>{{ $a->jurusan }}</td>
                                        <td>{{ $a->no_hp }}</td>
                                        <td>
                                            @if ($a->gambar_anggota)
                                                <img src="{{ Storage::url($a->gambar_anggota) }}" alt="Gambar anggota"
                                                    style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $a->created_at }}</td>
                                        <td>

                                            <a href="{{ url('anggota/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('anggota/' . $a->id, []) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $anggota->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
