<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tentang Kami - Rumah Syifa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center" style="background-image:url('{{ asset('assets/img/hero/h1_hero.png') }}'); background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Tentang Kami</h2>
                            <p>Rumah Syifa - Hipnoterapi Malang & Pelatihan Pemberdayaan Diri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Content -->
    <div class="about-area2 section-padding40">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar -->
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/gallery/about.png') }}" alt="Tentang Rumah Syifa">
                    </div>
                </div>
                <!-- Deskripsi -->
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <div class="section-tittle mb-35">
                            <h2>Membantu Anda Menemukan Versi Terbaik Diri Anda</h2>
                        </div>
                        <p class="pera-top mb-40">
                            Rumah Syifa hadir sebagai pusat hipnoterapi dan pelatihan pemberdayaan diri di Malang. 
                            Kami berkomitmen untuk membantu setiap individu menemukan ketenangan, motivasi, dan solusi dalam hidupnya.
                        </p>
                        <ul>
                            <li><i class="fas fa-check-circle text-success"></i> Hipnoterapi Profesional & Berpengalaman</li>
                            <li><i class="fas fa-check-circle text-success"></i> Program Pelatihan Pemberdayaan Diri</li>
                            <li><i class="fas fa-check-circle text-success"></i> Konsultasi Ramah & Rahasia Terjaga</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section (opsional) -->
    <div class="counter-area section-padding40" style="background:#f5fff7;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30">
                        <h2 class="counter">500+</h2>
                        <p>Klien Puas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30">
                        <h2 class="counter">10+</h2>
                        <p>Tahun Pengalaman</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30">
                        <h2 class="counter">50+</h2>
                        <p>Program Pelatihan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- JS -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
