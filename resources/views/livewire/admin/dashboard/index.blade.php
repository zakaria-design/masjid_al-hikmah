<div>
    
    <div id="content-wrapper" class="mb-5">
        <section class="content-header pt-0 mt-0 pt-md-5 mt-md-5">
            <div class=" px-2 mb-3">
                <div class="row g-3">

                    <!-- Card 1 -->
                    <div class="col-md-3 col-sm-6">
                    <div class="stat-card bg-primary bg-opacity-75 text-dark p-3 rounded">
                        <!-- Flex container untuk icon dan angka -->
                        <div class="d-flex align-items-center mb-2" style="height: 100px;">
                        <!-- Icon setengah card dengan background putih -->
                        <div class="d-flex justify-content-center align-items-center bg-white rounded me-3" style="flex:1; height:100%;">
                            <i class="bi bi-people-fill" style="font-size:3.5rem; color:#0d6efd;"></i>
                        </div>
                        <!-- Angka besar -->
                        <div class="d-flex justify-content-center align-items-center fw-bold" style="flex:1; font-size:2.5rem;">
                            150
                        </div>
                        </div>
                        <!-- Judul di bawah, tengah antara icon dan angka -->
                        <div class="text-center fw-semibold">
                        Jumlah Jemaah
                        </div>
                    </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3 col-sm-6">
                    <div class="stat-card bg-success bg-opacity-75 text-dark p-3 rounded">
                        <!-- Flex container untuk icon dan angka -->
                        <div class="d-flex align-items-center mb-2" style="height: 100px;">
                        <!-- Icon setengah card dengan background putih -->
                        <div class="d-flex justify-content-center align-items-center bg-white rounded me-3" style="flex:1; height:100%;">
                            <i class="bi bi-currency-exchange" style="font-size:3.5rem; color:#198754;"></i>
                        </div>
                        <!-- Angka besar -->
                        <div class="d-flex justify-content-center align-items-center fw-bold" style="flex:1; font-size:2.5rem;">
                            12 Jt
                        </div>
                        </div>
                        <!-- Judul di bawah, tengah antara icon dan angka -->
                        <div class="text-center fw-semibold">
                        Uang Kas
                        </div>
                    </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card bg-warning bg-opacity-75 text-dark p-3 rounded">
                            <!-- Flex container untuk icon dan angka -->
                            <div class="d-flex align-items-center mb-2" style="height: 100px;">
                            <!-- Icon setengah card dengan background putih -->
                            <div class="d-flex justify-content-center align-items-center bg-white rounded me-3" style="flex:1; height:100%;">
                                <i class="bi bi-graph-up" style="font-size:3.5rem; color:#ffc107;"></i>
                            </div>
                            <!-- Angka besar -->
                            <div class="d-flex justify-content-center align-items-center fw-bold" style="flex:1; font-size:2.5rem;">
                                89%
                            </div>
                            </div>
                            <!-- Judul di bawah, tengah antara icon dan angka -->
                            <div class="text-center fw-semibold">
                            Kehadiran Jemaah
                            </div>
                        </div>
                    </div>

                   <!-- Card 4 -->
                    <div class="col-md-3 col-sm-6">
                    <div class="stat-card bg-danger bg-opacity-75 text-dark p-3 rounded">
                        <!-- Flex container untuk icon dan angka -->
                        <div class="d-flex align-items-center mb-2" style="height: 100px;">
                        <!-- Icon setengah card dengan background putih -->
                        <div class="d-flex justify-content-center align-items-center bg-white rounded me-3" style="flex:1; height:100%;">
                            <i class="bi bi-device-ssd-fill" style="font-size:3.5rem; color:#dc3545;"></i>
                        </div>
                        <!-- Angka besar -->
                        <div class="d-flex justify-content-center align-items-center fw-bold" style="flex:1; font-size:2.5rem;">
                            12
                        </div>
                        </div>
                        <!-- Judul di bawah, tengah antara icon dan angka -->
                        <div class="text-center fw-semibold">
                            <a href="{{ route('dashboard.mesjid') }}" class="text-dark">Halaman User</a>
                        
                        </div>
                    </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <!-- Gunakan align-items-stretch agar semua kolom punya tinggi sama -->
                <div class="row g-3 align-items-stretch">

                    <!-- Kolom 1 -->
                    <div class="col-md-3 d-flex">
                        <div class="card shadow-sm w-100 h-100">
                            <div class="card-header bg-primary text-dark text-center  bg-opacity-75">
                                <h5 class="mb-0 text-dark">Jadwal Pengajian </h5>
                            </div>
                            <div class="card-body">
                                <h6 class="fw-bold">Siang</h6>
                                <ul class="list-group list-group-flush mb-3">
                                    @forelse($siang as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                          Jam  {{ \Carbon\Carbon::parse($item->jam)->format('H:i') }}
                                        </li>
                                    @empty
                                        <li class="list-group-item text-muted">Belum ada jadwal siang</li>
                                    @endforelse
                                </ul>

                                <h6 class="fw-bold">Malam</h6>
                                <ul class="list-group list-group-flush">
                                    @forelse($malam as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                          Jam  {{ \Carbon\Carbon::parse($item->jam)->format('H:i') }}
                                        </li>
                                    @empty
                                        <li class="list-group-item text-muted">Belum ada jadwal malam</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="col-md-6 d-flex">
                        <div class="card shadow-sm w-100 h-100">
                            <div class="card-header bg-success text-dark bg-opacity-75 text-center">
                                <h5 class="mb-0">Rekap Uang Kas perbulan</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="lineChart" height="150"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="col-md-3 d-flex">
                        <div class="card shadow-sm w-100 h-100">
                            <div class="card-header bg-warning text-dark text-center">
                                <h5 class="mb-0 text-dark">Kriteria Pengeluaran</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
