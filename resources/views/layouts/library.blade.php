<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Unama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            color: wheat
        }

        .book-card {
            margin-bottom: 20px;
        }

        .my-navbar .nav-item {
            margin-right: 20px;

        }

        .navbar {
            background-color: rgb(255, 209, 124);
        }

        .navbar-brand {
            color: white
        }

        .my-footer {
            background-color: rgb(255, 209, 124);
        }

        .my-footer .container {
            color: #000000;
        }

        .my-body {
            background-image: url({{ asset('/image/book-wall.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
        }

        .navbar-dark {
            background-color: rgb(255, 209, 124);
        }

        .card-img-top-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            overflow: hidden;
            background-color: transparent;
        }

        .card-img-top {

            object-fit: contain;
            border-radius: 10px;
        }

        .card-textile {
            background-color: #a79c41a2;
            color: #3f3f3f;
        }

        .book-card {
            background-color: #fff9d4;
            border-radius: 40px
        }
    </style>
</head>

<body class="my-body">
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('bebas') }}/assets/img/unama.png" alt="logo" height="30">
            Perpustakaan Unama
        </a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-2">
                    <a class="nav-link btn btn-outline-primary btn-sm" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item active mr-2">
                    <a class="nav-link btn btn-outline-primary btn-sm" href="#about">Tentang</a>
                </li>
                <li class="nav-item active mr-2">
                    <a class="nav-link btn btn-outline-primary btn-sm" href="#books">Buku</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item mr-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link btn btn-info btn-sm">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link btn btn-info btn-sm">Log in</a>
                            @if (Route::has('register'))
                        <li class="nav-item mr-2">
                            <a href="{{ route('register') }}" class="nav-link btn btn-info btn-sm">Register</a>
                        </li>
                    @endif
                @endauth
                </li>
                @endif
            </ul>
        </div>
    </nav>

    <section id="books" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our New Book Collection</h2>
            <div class="row" id="book-list">
                @foreach ($bukuTerbaru as $buku)
                    <div class="col-lg-4 col-md-6">
                        <div class="card book-card">
                            <div class="card-img-top-container">
                                <a href="#" data-toggle="modal" data-target="#imageModal"
                                    data-img="{{ Storage::url($buku->gambar_buku) }}">
                                    @if ($buku->gambar_buku)
                                        <img src="{{ Storage::url($buku->gambar_buku) }}" class="card-img-top"
                                            alt="{{ $buku->judul_buku }}">
                                    @else
                                        <img src="https://via.placeholder.com/300x400?text=Book+Cover"
                                            class="card-img-top" alt="{{ $buku->judul_buku }}">
                                    @endif
                                </a>
                            </div>
                            <div class="card-body text-center card-textile">
                                <h5 class="card-title">{{ $buku->judul_buku }}</h5>
                                <p class="card-text">{{ $buku->penulis }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">
                        <h5 class="card-title">{{ $buku->judul_buku }}</h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modal-image" alt="Book Image">
                </div>
            </div>
        </div>
    </div>

    <footer class="my-footer text-white py-3">
        <div class="container text-center">
            <p>Edited with <a href="https://github.com/ryuzenc/tugas_perpustakaans/">❤</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('#imageModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var imgSrc = button.data('img')
            var modal = $(this)
            modal.find('.modal-body #modal-image').attr('src', imgSrc)
        });
    </script>

</body>

</html>
