<div>
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">

    <!-- Judul dashboard -->
    <div class="row mb-3">
      <div class="col-12">
        <h1 class="m-0"><i class="fas fa-user me-2"></i> Data Uang Kas</h1>
      </div>
    </div>

    <!-- Cards di tengah -->
    <div class="row justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="stat-card bg-danger bg-opacity-75 text-dark p-2 rounded text-center">
            <h1>Pengeluaran</h1>
          <div class="d-flex justify-content-center align-items-center bg-white rounded mb-2" style="width:100px; height:50px; margin:auto;">
            <i class="bi bi-people-fill" style="font-size:1.8rem; color:hsl(0, 98%, 52%);"></i>
          </div>
          <div class="fw-bold fs-6">{{ number_format($this->totalUangKeluar, 0, ',', '.') }}</div>
        </div>
      </div>

      <!-- Card 2 -->
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card bg-success bg-opacity-75 text-dark p-2 rounded text-center">
                <h1>Saldo</h1>
                <div class="d-flex justify-content-center align-items-center bg-white rounded mb-2" style="width:100px; height:50px; margin:auto;">
                    <i class="bi bi-currency-exchange" style="font-size:1.8rem; color:#198754;"></i>
                </div>
            <div class="fw-bold fs-6">
        <div class="fw-bold fs-6">{{ $this->saldoTerakhirFormatted }}</div>

          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="stat-card bg-warning bg-opacity-75 text-dark p-2 rounded text-center">
            <h3>Total Pemasukan</h3>
          <div class="d-flex justify-content-center align-items-center bg-white rounded mb-2" style="width:100px; height:50px; margin:auto;">
            <i class="bi bi-graph-up" style="font-size:1.8rem; color:#ffc107;"></i>
          </div>
          <div class="fw-bold fs-6">{{ $this->totalUangMasukTerakhirFormatted }}</div>
        </div>
      </div>
    </div>

  </div>
</section>


    <!-- section tabel pengeluaran -->
    <section class="content">
        <div class="container mt-4">
      <!-- Default box -->
      <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between">
                <div>
                    <button wire:click="create" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus mr-1"></i> Tambah Data</button>
                </div>
                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-print mr-1"></i>  Cetak
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-success" href="#"><i class="fas fa-file-excel mr-1"></i> Excel</a>
                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-file-pdf mr-1"></i> PDF</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- card --}}
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-between">
                {{-- drop down paginate --}}
                <div class="col-2">
                    <select wire:model.live="paginate" class="form-control">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                {{-- pencarian --}}
                <div class="col-6">
                    {{-- dummy --}}
                    <input type="text" style="display:none">
                    <input type="password" style="display:none">
                    {{-- dummy --}}
                    <input wire:model.live="search" type="text"   name="dont_autofill_this_chrome" id="fake_search" placeholder="Pencarian..." class="form-control" autocomplete="new-password">
                </div>
            </div>
            {{-- table --}}
            <div class="table-responsive">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Pengeluaran</th>
                              <th>Jenis</th>
                              <th>Nominal Keluar</th>
                              <th>Total Pengeluaran</th>
                              <th>Tanggal</th>
                          </tr>
                      </thead>
                      <tbody>
                            @forelse ($pengeluaran as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_pengeluaran }}</td>
                                    <td>{{ ucfirst($item->jenis_pengeluaran) }}</td>
                                    <td>Rp {{ number_format($item->uang_keluar, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item->total_uang_keluar, 0, ',', '.') }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-3">Belum ada data</td>
                                </tr>
                            @endforelse
                      </tbody>
                  </table> 
                  {{-- pagination --}}
                  {{ $pengeluaran->links() }}      
            </div>    
        </div>
      </div>  
    </section>

    <!-- section tabel pemasukan -->
    <section class="content">
        <div class="container mt-4">
      <!-- Default box -->
      <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between">
                <div>
                   <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#donasiModal" wire:click="createDonasi"><i class="fas fa-plus mr-1"></i>Tambah Donasi</button>
                </div>
                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-print mr-1"></i>  Cetak
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-success" href="#"><i class="fas fa-file-excel mr-1"></i> Excel</a>
                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-file-pdf mr-1"></i> PDF</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- card --}}
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-between">
                {{-- drop down paginate --}}
                <div class="col-2">
                    <select wire:model.live="paginate" class="form-control">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                {{-- pencarian --}}
                <div class="col-6">
                    {{-- dummy --}}
                    <input type="text" style="display:none">
                    <input type="password" style="display:none">
                    {{-- dummy --}}
                    <input wire:model.live="search" type="text"   name="dont_autofill_this_chrome" id="fake_search" placeholder="Pencarian..." class="form-control" autocomplete="new-password">
                </div>
            </div>
            {{-- table --}}
            <div class="table-responsive">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Donasi</th>
                              <th>Nominal Donasi</th>
                              <th>Total Donasi</th>
                              <th>Saldo</th>
                              <th>Tanggal</th>
                          </tr>
                      </thead>
                      <tbody>
                            @forelse ($donasi as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_donasi }}</td>
                                    <td>Rp {{ number_format($item->uang_masuk, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item->total_uang_masuk, 0, ',', '.') }}</td>
                                     <td>Rp {{ number_format($item->saldo, 0, ',', '.') }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-3">Belum ada data</td>
                                </tr>
                            @endforelse
                      </tbody>
                  </table> 
                  {{-- pagination --}}
                  {{ $donasi->links() }}      
            </div>    
        </div>
      </div>  
    </section>





                        

     {{-- create modal --}}
    @include('livewire.superadmin.user.create')

     {{-- close create modal --}}
    @script
        <script>
            $wire.on('closeCreateModal', () => {
                $('#createModal').modal('hide');
                // alert succes
                Swal.fire({
                title: "Sukses!!",
                text: "data berhasil ditambahkan",
                icon: "success"
                });
            });
        </script>
    @endscript

    {{-- donasi modal --}}
    @include('livewire.superadmin.user.donasi')

     {{-- close create modal --}}
    @script
        <script>
            $wire.on('closeDonasiModal', () => {
                $('#donasiModal').modal('hide');
                // alert succes
                Swal.fire({
                title: "Sukses!!",
                text: "Donasi berhasil ditambahkan",
                icon: "success"
                });
            });
        </script>
    @endscript

    </div>
</div>

    
   