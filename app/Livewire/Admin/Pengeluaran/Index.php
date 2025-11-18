<?php

namespace App\Livewire\Admin\Pengeluaran;

use App\Models\UangKas;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 5;
    public $search = '';

    public $nama_pengeluaran, $jenis_pengeluaran, $uang_keluar;

    public $nama_donasi, $uang_masuk; 

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Data pengeluaran dengan pencarian
        $pengeluaran = UangKas::select('id','nama_pengeluaran','jenis_pengeluaran','uang_keluar','total_uang_keluar','created_at')
            ->where('nama_pengeluaran', 'like', '%' . $this->search . '%')
            ->orWhere('jenis_pengeluaran', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate($this->paginate);

        // Data donasi (nama_donasi tidak null)
        $donasi = UangKas::select('id','nama_donasi','uang_masuk','total_uang_masuk','saldo','created_at')
            ->where('nama_donasi', 'like', '%' . $this->search . '%')
            ->whereNotNull('nama_donasi')
            ->orderBy('id', 'desc')
            ->paginate($this->paginate);

        return view('livewire.admin.pengeluaran.index', [
            'title' => 'Data Uang Kas',
            'pengeluaran' => $pengeluaran,
            'donasi' => $donasi
        ]);
    }


    // reset form saat klik tambah
    public function create()
    {
        $this->resetValidation();
        $this->reset([
            'nama_pengeluaran',
            'jenis_pengeluaran',
            'uang_keluar',
        ]);
    }

    // simpan data
    public function store()
{
    $this->validate([
        'nama_pengeluaran' => 'required|string|max:100',
        'jenis_pengeluaran' => 'required|string',
        'uang_keluar' => 'required|numeric|min:1',
    ], [
        'nama_pengeluaran.required' => 'Nama pengeluaran wajib diisi',
        'jenis_pengeluaran.required' => 'Jenis pengeluaran wajib dipilih',
        'uang_keluar.required' => 'Uang keluar wajib diisi',
        'uang_keluar.numeric' => 'Uang keluar harus angka',
    ]);

    // Ambil saldo terakhir
    $saldoTerakhir = UangKas::latest('id')->value('saldo') ?? 0;

    // Hitung saldo baru
    $saldoBaru = $saldoTerakhir - $this->uang_keluar;

    // Simpan ke tabel uang_kas
    $uangKas = new UangKas();
    $uangKas->nama_pengeluaran = $this->nama_pengeluaran;
    $uangKas->jenis_pengeluaran = $this->jenis_pengeluaran;
    $uangKas->uang_keluar = $this->uang_keluar;
    $uangKas->saldo = $saldoBaru;
    $uangKas->save();

    // 🔹 Update total_uang_keluar
    $totalUangKeluar = UangKas::sum('uang_keluar'); // jumlahkan semua uang_keluar
    // Update kolom total_uang_keluar di record terakhir (atau semua record jika mau)
    $uangKas->total_uang_keluar = $totalUangKeluar;
    $uangKas->save();

    // 🔥 event untuk menutup modal
    $this->dispatch('closeCreateModal');

    // Reset input setelah berhasil
    $this->reset(['nama_pengeluaran', 'jenis_pengeluaran', 'uang_keluar']);
}

    public function createDonasi()
    {
        $this->resetValidation();
        $this->reset([
            'nama_donasi',
            'uang_masuk',
        ]);

    }


        public function storeDonasi()
        {
            $this->validate([
                'nama_donasi' => 'required|string|max:100',
                'uang_masuk' => 'required|numeric|min:1',
            ], [
                'nama_donasi.required' => 'Nama donasi wajib diisi',
                'uang_masuk.required' => 'Uang masuk wajib diisi',
                'uang_masuk.numeric' => 'Uang masuk harus berupa angka',
            ]);

            // Ambil saldo terakhir (jika belum ada, anggap 0)
            $saldoTerakhir = UangKas::latest('id')->value('saldo') ?? 0;

            // Hitung saldo baru
            $saldoBaru = $saldoTerakhir + $this->uang_masuk;

            // Hitung total pemasukan baru
            $totalUangMasuk = UangKas::sum('uang_masuk') + $this->uang_masuk;

            // Simpan data donasi sekaligus total_uang_masuk
            $uangKas = new UangKas();
            $uangKas->nama_donasi = $this->nama_donasi;
            $uangKas->uang_masuk = $this->uang_masuk;
            $uangKas->total_uang_masuk = $totalUangMasuk;
            $uangKas->saldo = $saldoBaru;
            $uangKas->save();

            // Event untuk menutup modal
            $this->dispatch('closeDonasiModal');

            // Reset input
            $this->reset(['nama_donasi', 'uang_masuk']);
        }


        // tampilkan hanya saldo akhir
            public function getSaldoTerakhirFormattedProperty()
        {
            $saldo = UangKas::latest('id')->value('saldo') ?? 0;
            return number_format($saldo, 0, ',', '.');
        }

        // tampilkan total pengeluaran
            public function getTotalUangKeluarProperty()
        {
            return UangKas::sum('uang_keluar');
        }

        // tampilkan total pemasukan
        public function getTotalUangMasukTerakhirFormattedProperty()
        {
            // Ambil record terakhir yang total_uang_masuk tidak null
            $total = UangKas::whereNotNull('total_uang_masuk')
                            ->orderBy('id','desc')
                            ->value('total_uang_masuk') ?? 0;

            return number_format($total, 0, ',', '.');
}



    
}

