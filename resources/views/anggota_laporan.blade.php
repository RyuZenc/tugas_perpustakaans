<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Anggota</title>

    <!-- Scripts-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <a href="{{ url('dashboard', []) }}">
        <span>Dashboard</span>
    </a>
</head>

<body>
    <button class></button>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div style="text-align: center;">
                    <h2>{{ $judul }}</h2>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIM</th>
                            <th>Nama Anggota</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>No hp</th>
                            <th>Created</th>
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
                                <td>{{ $a->created_at }}</td>
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
