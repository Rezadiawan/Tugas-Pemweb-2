<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WebEnterprise</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg custom-navbar bg-dark">
        <div class="container-fluid">
            <!-- Navbar Brand -->
            <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('assets/img/Logo.png') }}" height="50" alt="">
                Inaklug
            </a>

            <!-- Button for toggling burger menu on mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar items that will collapse on mobile -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">LAYANAN KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">HUBUNGI KAMI</a>
                    </li>
                </ul>
                <div class="custom-border rounded-pill mx-5">
                    <a class="nav-link text-white px-3 py-2" href="#">DAFTAR ONLINE</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Header Section --}}
    <div class="about d-flex justify-content-center align-items-center" style="height: 615px;">
        <div class="container text-center">
            <h1 class="text-white">Tentang Kami</h1>
        </div>
    </div>

    {{-- Profile Section --}}
    <div class="container my-5">
        <div class="text-start px-5 pb-5 content-box">
            <h1>PROFIL</h1>
            <p>Didirikan pada tahun 2018, INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman,
                terbesar, terpercaya, dan memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia
                menuntut ilmu di berbagai negara maju dunia.</p>
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center mb-4">
                    <img class="img my-3" src="{{ asset('../assets/img/IMG2.png') }}" alt="">
                    <div class="text-center">
                        <h2>Visi</h2>
                        <p>Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara
                            internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter
                            pemimpin Indonesia masa depan yang tangguh, mandiri dan profesional.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center mb-4">
                    <img class="img my-3" src="{{ asset('../assets/img/IMG3.png') }}" alt="">
                    <div class="text-center">
                        <h2>Misi</h2>
                        <p>Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara
                            internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter
                            pemimpin Indonesia masa depan yang tangguh, mandiri dan profesional.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a class="btn btn-outline-primary rounded-pill px-4 py-2" href="#">Layanan Kami</a>
            </div>
        </div>
    </div>

    {{-- Contact Us Section --}}
    <div class="container my-5">
        <div class="row text-center">
            <h2>HUBUNGI KAMI</h2>
            <h3>Kantor Pusat</h3>
            <h5>MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT.BASEMENT</h5>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="m-2">
                    <a class="btn btn-primary rounded-pill px-4 py-2" href="#">LOKASI KAMI</a>
                </div>
                <div class="m-2">
                    <a class="btn btn-outline-primary rounded-pill px-4 py-2" href="#">KIRIM PESAN</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="footer bg-dark text-white py-3">
        <div class="container text-center">
            <p>Copyright &copy; 2020 - Inaklug Indonesia | Hak cipta dilindungi undang - undang</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
