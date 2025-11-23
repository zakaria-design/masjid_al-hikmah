<div>

    <div id="content-wrapper" class="mb-5">
    <!-- Content Header (Page header) -->
        <section class="content-header pt-0 mt-0 pt-md-5 mt-md-5">
            <div class="container-fluid">
            <!-- Judul dashboard -->
                <div class="row mb-3">
                    <div class="col-12">
                        <h2 class="m-0 text-primary"><i class="fas fa-retweet"></i> Input Activitas</h2>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-4">
                <div class="row">

                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                    <div class="card">
                        <h5 class="text-center pt-2">Pengajian Harian</h5>
                        <div class="card-body">

                        <!-- Siang -->
                        <h5 class="mb-3 fw-bold text-lg">Siang</h5>
                        <ul class="list-group mb-4">
                            @forelse($siang as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                   Jam {{ \Carbon\Carbon::parse($item->jam)->format('H:i') }}
                                    <button class="btn btn-sm btn-outline-primary" title="Edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal"
                                    wire:click="edit({{ $item->id }})"><i class="fas fa-edit"></i></button>
                                </li>
                            @empty
                                <li class="list-group-item text-muted">Belum ada jadwal siang</li>
                            @endforelse
                        </ul>

                        <!-- Malam -->
                        <h5 class="mb-3 fw-bold text-lg">Malam</h5>
                        <ul class="list-group">
                            @forelse($malam as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  Jam  {{ \Carbon\Carbon::parse($item->jam)->format('H:i') }}
                                    <button class="btn btn-sm btn-outline-primary" title="Edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal"
                                    wire:click="edit({{ $item->id }})"><i class="fas fa-edit"></i></button>
                                </li>
                            @empty
                                <li class="list-group-item text-muted">Belum ada jadwal malam</li>
                            @endforelse
                        </ul>

                        </div>
                    </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="mb-3 text-center">Jadwal Kajian Mingguan</h5>

                            <ul class="list-group">
                                @forelse($kajianList as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->judul }}
                                    <button class="btn btn-outline-danger"><i class="fas fa-trash" wire:click="delete({{ $item->id }})"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"></i></button>
                                </li>
                                @empty
                                    <li class="list-group-item text-center text-muted">
                                        Belum ada data kajian
                                    </li>
                                @endforelse
                            </ul>

                            </div>
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addKajianModal">Tambah Kajian</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@include('livewire.admin.activitas.edit')
@include('livewire.admin.activitas.input')
</div>

