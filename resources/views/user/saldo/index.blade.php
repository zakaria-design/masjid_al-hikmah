<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewan Masjid | Masjid Al-hikmah</title>
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
    .dewan-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dewan-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .dewan-card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .badge-role {
            font-size: 0.8rem;
            padding: 6px 12px;
            border-radius: 30px;
        }
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
                        <a class="nav-link active " href="{{ route('kegiatan.mesjid') }}" aria-current="page" href="#">Kegiatan</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link " href="{{ route('dewan.mesjid') }}">Dewan Masjid</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link active text-danger" aria-current="page" href="#">Informasi Saldo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container">
            <h1 class="text-light text-center">Informasi Saldo</h1>
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
    

        <div class="container-fluid py-5">
        <div class="container">
            <h3 class="text-center">Informasi Saldo </h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">
                    <div class="card">
                        <img src="{{ asset('img/saldo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Saldo</h5>
                            <p class="card-text">
                                Rp. {{ number_format($saldo, 0, ',', '.') }}
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
                                Rp. {{ number_format($uangKeluar ?? 0, 0, ',', '.') }}
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
                                Rp.{{ number_format($uangMasuk ?? 0, 0, ',', '.') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <h5 class="fw-bold mb-3">📄 Daftar Pengeluaran</h5>

            <ul class="list-group shadow-sm rounded">
                @forelse($pengeluaran as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item }}
                        <span class="badge bg-secondary rounded-pill">Pengeluaran</span>
                    </li>
                @empty
                    <li class="list-group-item text-center text-muted">
                        Tidak ada data pengeluaran.
                    </li>
                @endforelse
            </ul>

            <h5 class="fw-bold mb-3 mt-5">📄 Daftar Pemasukan</h5>

            <ul class="list-group shadow-sm rounded">
                @forelse($pemasukan as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item }}
                        <span class="badge bg-secondary rounded-pill">Pemasukan</span>
                    </li>
                @empty
                    <li class="list-group-item text-center text-muted">
                        Tidak ada data pemasukan.
                    </li>
                @endforelse
            </ul>


        </div>
    </div>

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
      <!-- akhir footer -->
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