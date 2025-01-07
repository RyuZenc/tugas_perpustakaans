<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Pages / Register - Perpustakaan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="{{ asset('bebas') }}/assets/img/favicon.png" rel="icon" />
    <link href="{{ asset('bebas') }}/assets/img/unama.png" rel="unama-icon" />

    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <link href="{{ asset('bebas') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('bebas') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('bebas') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset('bebas') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="{{ asset('bebas') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="{{ asset('bebas') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="{{ asset('bebas') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <link href="{{ asset('bebas') }}/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('bebas') }}/assets/img/logo.png" alt="" />
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            Buat Akun
                                        </h5>
                                        <p class="text-center small">
                                            Masukkan Detail Personal untuk Mendaftar
                                        </p>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}"
                                        class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id="yourName"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus />
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" id="yourEmail"
                                                value="{{ old('email') }}" required autocomplete="email" />
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="yourPassword" required autocomplete="new-password" />
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPasswordConfirm" class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="yourPasswordConfirm" required autocomplete="new-password" />
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Daftar
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">
                                                Sudah Punya Akun?
                                                <a href="pages-login.html">Log in</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits">
                                Edited with
                                <a href="https://github.com/ryuzenc/tugas_perpustakaans/">❤</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('bebas') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/quill/quill.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/php-email-form/validate.js"></script>

    <script src="{{ asset('bebas') }}/assets/js/main.js"></script>
</body>

</html>
