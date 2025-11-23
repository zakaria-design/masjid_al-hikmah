<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Masjid Al-hikmah</title>
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
                        <a class="nav-link active text-danger"  href="#">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="{{ route('kegiatan.mesjid') }}">Kegiatan</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="{{ route('dewan.mesjid') }}">Dewan Masjid</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="{{ route('saldo.mesjid') }}">Informasi Saldo</a>
                    </li>
                    {{-- <li class="nav-item me-5">
                        <a class="nav-link" href="card.html" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-hand-holding-usd"></i>
                            Informasi Saldo
                        </a>
                    </li> --}}
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
            <h1 class="text-light text-center">Selamat Datang</h1>
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
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <h3 class="text-center">Informasi Saldo </h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">
                    <div class="card">
                        <img src="{{ asset('img/saldo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Saldo</h5>
                            <p class="card-text">
                                Rp. 20.000
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">
                    <div class="card">
                        <img src="{{ asset('img/pengeluaran.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pengeluaran</h5>
                            <p class="card-text">
                                Rp. 30.000
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">
                    <div class="card">
                        <img src="{{ asset('img/imapk.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pemasukan</h5>
                            <p class="card-text">
                                Rp.50.000
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
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
    
    <!-- akhir produk -->

    <!-- apa kata customer -->
    <div class="container-fluid py-5">
        <div class="container">
            <h3 class="text-center mb-5">Ulasan Tentang Kami</h3>
            {{-- <div class="row" data-masonry='{"percentPosition": true }'>

                <div class="col-lg-4 mb-3 hovered-card">
                    <div class="card p-3">
                        <figure>
                            <blockquote class="blockquote">
                                <p class="text-primary">Pengurus mesjidnya amanah....</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Uchiha madara
                            </figcaption>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas facilis 
                                accusantium! Explicabo deleniti laudantium itaque recusandae tenetur voluptas eos rerum et,
                                 at animi tempore dignissimos soluta magni placeat incidunt?
                            </p>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 hovered-card">
                    <div class="card p-3">
                        <figure>
                            <blockquote class="blockquote">
                                <p class="text-primary">Sempat ikut berteduh karna hujan sekalian sholat ashar</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Sasuke uchiha
                            </figcaption>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas facilis 
                                eos rerum et, at animi tem
                            </p>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 hovered-card">
                    <div class="card p-3">
                        <figure>
                            <blockquote class="blockquote">
                                <p class="text-primary">Masjidnya sangat besar dan bersih....</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Naruto uzumaki
                            </figcaption>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas facilis 
                                accusantium! Explicabo deleniti laudantium itaque recusandae tenetur voluptas eos rerum et,
                                 at animi tempore dignissimos soluta magni placeat incidunt? ectetur adipisicing elit. Molestias quas facilis 
                                 accusantium! Explicabo deleniti laudantium itaque recusandae tenetur v
                            </p>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 hovered-card">
                    <div class="card p-3">
                        <figure>
                            <blockquote class="blockquote">
                                <p class="text-primary">Tempat anak saya mengaji saat sore, ustadz pengajarnya ramah</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                jiraiya sensei
                            </figcaption>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas facilis 
                                accusantium! Explicabo deleniti laudantium itaque recusandae tenetur voluptas eos rerum et,
                                 at animi tempore dignissimos soluta magni placeat incidunt?
                            </p>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 hovered-card">
                    <div class="card p-3">
                        <figure>
                            <blockquote class="blockquote">
                                <p class="text-primary">Suka dengan design masajidnya sangat modern</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Nenek sunade
                            </figcaption>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas facilis 
                                accusantium! Explicabo deleniti laudantium itaque recusandae tenetur voluptas eos rerum et,
                                 at animi tempore dignissimos soluta magni placeat incidunt? dignissimos soluta magni placeat incidunt?
                            </p>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 hovered-card">
                    <div class="card p-3">
                        <figure>
                            <blockquote class="blockquote">
                                <p class="text-primary">Parkiran luas ketika bawa kendaraan roda 4</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Hatake kakashi
                            </figcaption>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas facilis 
                                accusantium! Explicabo deleniti laudantium itaque recusandae tenetur voluptas eos rerum et,
                                 at animi tempore dignissimos soluta magni placeat incidunt? dignissimos soluta magni placeat incidunt?
                            </p>
                        </figure>
                    </div>
                </div>
                

            </div> --}}
            <div class="container my-4">
                <div class="mb-4" style="max-height:400px; overflow-y:auto; border:1px solid #ddd; padding:15px; border-radius:10px;">
    @foreach ($pesan as $msg)

        @php
            // Jika ID genap → kanan, ganjil → kiri
            $posisiKanan = $msg->id % 2 == 0;
        @endphp

        <div class="d-flex mb-3 {{ $posisiKanan ? 'justify-content-end' : '' }}">
            <div class="p-3 {{ $posisiKanan ? 'bg-primary text-white' : 'bg-light' }} border rounded" style="max-width: 60%;">
                <p class="mb-1">{{ $msg->pesan }}</p>
                <small class="d-block text-end {{ $posisiKanan ? 'text-light' : 'text-muted' }}">- {{ $msg->nama }}</small>
            </div>
        </div>

    @endforeach
</div>

            </div>

        </div>
    </div>

    <!-- 
     note :
     => pada div card diberi p-3 yaitu padding 3 px agar kiri kanan bawah atas ada paddingnya
     => pada div parent row diberi data-masonry='{"percentPosition": true }, agar posisi setiap cardnya otomatis
        resposif menyesuaikan dengan tampilan layar dan posisinya 
    -->
    <!-- akhir apa kata customer -->

    <!-- reservasi -->
     <div class="container-fluid py-5 main-color">
        <div class="container">
            <h3 class="text-center">Infaq Dan Sodaqoh</h3>
            <p class="text-center">semoga allah swt membalas kebaikan anda dengan berkali lipat...</p>
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-4 col-md-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#rekeningModal">
                        <img src="{{ asset('img/Bank_Syariah_Indonesia.svg.png') }}" class="bank-logo" style="width: 150px" alt="">
                    </a>
                </div>
                <div class="col-4 col-md-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#rekeningModalBca">
                        <img src="{{ asset('img/bca.png') }}" class="bank-logo" style="width: 150px" alt="">
                    </a>
                </div>
                <div class="col-4 col-md-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#rekeningModalMandiri">
                        <img src="{{ asset('img/Logo-Bank-Mandiri.png') }}" class="bank-logo" style="width: 150px" alt="">
                    </a>
                </div>
            </div>


            <form class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-5" method="POST" action="{{ route('kirim.bukti') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Masukan bukti transfer</label>
                    <input type="file" name="foto" class="form-control" accept="image/*" required>
                </div>

                <button class="btn btn-outline-dark w-100">Kirim</button>
            </form>
        </div>
     </div>
    
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

     <!-- footer -->
      <div class="container-fluid py-4 bg-dark text-light">
           <div class="container d-flex justify-content-between">
               <label>&copy;2025 Masjid Al-hikmah</label>
               <label>Created by zakaria</label>
           </div>
      </div>

@include('user.dashboard.bsi')
@include('user.dashboard.bca')
@include('user.dashboard.mandiri')

      <!-- akhir footer -->

      {{-- sweet alert --}}
      {{-- sweet alert --}}
{{-- Sweet Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                confirmButtonText: 'OK'
            });
        @endif
    });
</script>

      {{-- modal rekening --}}
   <script>
        function copyRekening(elementId) {
            let rekening = document.getElementById(elementId).innerText;

            navigator.clipboard.writeText(rekening).then(() => {
                alert("Nomor rekening berhasil disalin!");
            });
        }
    </script>



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