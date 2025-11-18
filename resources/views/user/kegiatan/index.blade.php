<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan | Masjid Al-hikmah</title>
    <!-- link css yg disedikan bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- link icon dari bootsrap icon cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <link rel="stylesheet" href="{{ asset('adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- link css tambahan buatan sendiri -->
   @include('user.style')
    <!-- link untuk efek light box -->
    <link rel="stylesheet" href="{{ asset('dist/css/lightbox.min.css') }}">

<style>
    .bank-logo {
    opacity: 0.6; /* agak pudar */
    transition: opacity 0.3s ease; /* efek transisi halus */
  }

    .bank-logo:hover {
    opacity: 1; /* jadi pekat saat di-hover */
  }
    .gallery-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .gallery-img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
</style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light main-color fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand me-auto" href="#"><i class="fas fa-mosque mr-3"></i> Masjid Al-hikmah</a>
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link active"  href="{{ route('dashboard.mesjid') }}">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link active text-danger" aria-current="page" href="#">Kegiatan</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="promo.html">Dewan Masjid</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="card.html" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-hand-holding-usd"></i>
                            Infaq & Sodaqoh
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 
      note :
      => active pada class link home untuk menandakan bahwa itu halaman yg aktive
    -->
    <!-- akhir navbar -->

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container">
            <h1 class="text-light text-center">Gallery Kegiatan</h1>
            <h3 class="text-light text-center">sistem informasi keuangan mesjid</h3>
            <!-- select box -->
            <div class="col-md-8 offset-md-2">
                <div class="input-group">
                    <select class="form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>telusuri..</option>
                        <option value="1">Info Kajian</option>
                        <option value="2">Info Saldo</option>
                        <option value="3">Info kegiatan</option>
                    </select>
                    <button class="btn btn-outline-info" type="button">Telusuri</button>
                </div>
            </div>
            <!-- akhir select box -->
        </div>
    </div>
    <!-- 
    note :
    => d-flex = agar container h1 mempunyai dimensi yg sama
    => col-md-8 offset-md-2 = select box yg dibungkus div agar ukurannya bisa lebih kecil dari defaultnya

     -->
    <!-- akhir banner -->

    <!-- promo -->
    <div class="container-fluid py-5">
        <div class="container">
            
                <div class="container py-5">
                    <h2 class="text-center mb-5 fw-bold">📸 Galeri Foto Masjid</h2>

                    <div class="row g-4">
                        @php
                            $images = [
                                'img/foto 1.jpg',
                                'img/foto 2.jpg',
                                'img/foto 4.jpg',
                                'img/foto 5.jpg',
                                'img/foto 6.jpg',
                                'img/foto 7.jpg',
                                'img/foto 8.jpg',
                                'img/foto 9.jpg',
                                'img/foto 10.jpg',
                                'img/foto 11.jpg',
                                'img/foto 12.jpg',
                                'img/foto 13.jpg',
                                'img/foto 14.jpg',
                                'img/foto 15.jpg',
                                'img/foto 16.jpg',
                                'img/foto 17.jpg',
                              
                            ];
                        @endphp

                        @foreach ($images as $image)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="card border-0 shadow-sm">
                                    <img src="{{ asset($image) }}" alt="Foto Galeri" class="gallery-img">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

        </div>
    </div>
    <!--
    note :
     => py-5 = agar bagian promo dengan banner ada jarak.
     => pada div row diberikan justify-content-center, karena pada cardnya hanya memuat 9 colom, jadi tersisa 3 colom
        yang tidak dipakai untuk itu pakai lah justify-content-center agar content nya berada ditengah

      -->
    <!-- akhir promo -->

    <!-- our service -->
    <div class="container-fluid py-5 main-color">
        <div class="container">
            <h3 class="text-dark text-center mb-5">Aktivitas Kami</h3>
            <div class="row justify-content-center">
              <div class="col-8 md-col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('img/foto 1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('img/foto 2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('img/foto 3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('img/foto 4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>  
              </div>
            </div>
        </div>
    </div>
    <!-- 
     note :
     => <i class="bi bi-bicycle"></i> yaitu code untuk menampilkan icon dari bootsrap cdn
     => d-flex align-items-center justify-content-center yaitu agar icon nya ada di tengah
     => display-5 pada tag icon yaitu agar ukurannya lebih besar
     => d-flex justify-content-center pada div pembungkus icon-service agar memposisikannya ke tengah

     -->
    <!-- akhir our service -->

    <!-- produk -->

    <!-- 
    note :
    => pada button diberi d-flex justify-content-center agar posisi nya ditengah        
    -->
    <!-- akhir produk -->
 
     <!-- 
     note :
     => pada class form diberi offset-lg-3 artinya sisa col 6 nya dibuat col kosong kiri 3, kanan 3
     => pada saat lebar layar medium maka col-md-8 offset-md-2, yaitu lebar form 8 kolom sisanya dibuat ofset kiri 2, kanan2
     => pada class btn diberi w-100 yaitu agar ukurannya sama dengan parent pembungkusnya
     -->
     <!-- akhir reservasi -->

    <!-- subscribe -->
     <div class="container-fluid py-5 subscribe text-light">
        <div class="container">
            <h5 class="text-center mb-4">Kunjungi Kami </h5>
            <div class="row justify-content-center">
                <div class=" col-sm-1 col-md-1 d-flex justify-content-center  mb-2">
                    <i class="bi bi-facebook fs-4"></i>
                </div>
                <div class=" col-sm-1 col-md-1  d-flex justify-content-center mb-2 ">
                    <i class="bi bi-instagram fs-4"></i>
                </div>
                <div class=" col-sm-1 col-md-1  d-flex justify-content-center mb-2 ">
                    <i class="bi bi-twitter fs-4"></i>
                </div>
                <div class=" col-sm-1 col-md-1  d-flex justify-content-center ">
                    <i class="bi bi-youtube fs-4"></i>
                </div>
            </div>
           
        </div>
     </div>
     <!-- 
     note :
     => pada class icon nya diberi fs-4, yaitu agar ukurannya sesuai yg diinginkan
     => pada class h5 diberi mb-0, yaitu agar tidak ada jarak antara h5 dengan paragraf 
     -->
     <!-- akhir subscribe -->

     <!-- footer -->
      <div class="container-fluid py-4 bg-dark text-light">
           <div class="container d-flex justify-content-between">
               <label>&copy;2025 Masjid Al-hikmah</label>
               <label>Created by zakaria</label>
           </div>
      </div>
      <!-- 
       note :
       => py, yaitu ukuran dari tinggi elemennya
       => pada clas container diberi d-flex justify-content-between yaitu agar 2 label nya
          berada di kiri dan kanan, atau berada diantara
      -->
      <!-- akhir footer -->


    <!-- link js dari bootstrap -->
    <script src="{{ asset('bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- link js untuk efek light box -->
    <script src="{{ asset('dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <!-- link js masonry -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" 
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" 
    crossorigin="anonymous" async></script>
</body>

</html>