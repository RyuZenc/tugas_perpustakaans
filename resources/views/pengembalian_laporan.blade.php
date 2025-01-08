<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Pengembalian</title>

    <!-- Scripts-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <a href="{{ url('dashboard', []) }}">
        <span>Dashboard</span>
    </a>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div style="text-align: center;">
                    <h2>{{ $judul }}</h2>
                </div>
                <table class="table table-bordered">
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
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Admin</h5>
            </div>
        </div>
    </div>
</body>

</html>
