@extends('layouts.niceadmin')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Penerbit</th>
                                    <th>Stok Buku</th>
                                    <th>Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $b)
                                    <tr>
                                        <td>{{ $b->id }}</td>
                                        <td>{{ $b->kode_buku }}</td>
                                        <td>{{ $b->judul_buku }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun }}</td>
                                        <td>{{ $b->stok }}</td>
                                        <td>{{ $b->created_at }}</td>
                                        <td>

                                            <a href="{{ url('buku/' . $b->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('buku/' . $b->id, []) }}" method="post" class="d-inline"
                                                onsubmit="return confirm('Apakah Dihapus?')">
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
                        {{ $buku->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
