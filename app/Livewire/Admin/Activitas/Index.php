<?php

namespace App\Livewire\Admin\Activitas;

use Livewire\Component;
use App\Models\Pengajian;
use Livewire\WithFileUploads;
use App\Models\Kajian;

class Index extends Component
{
    use WithFileUploads; // <-- tambahkan disini

    public $jam, $pengajianId;

    // field untuk insert kajian baru
    public $judul, $deskripsi, $foto;

    // fungsi ketika tombol edit diklik
    public function edit($id)
    {
        $data = Pengajian::find($id);
        $this->pengajianId = $id;
        $this->jam = $data->jam;
    }

    // fungsi simpan update
    public function update()
    {
        Pengajian::where('id', $this->pengajianId)->update([
            'jam' => $this->jam
        ]);

        // kirim event ke browser untuk trigger sweetalert
        $this->dispatch('alert-success', message: 'Data berhasil diperbarui!');

        // tutup modal
        $this->dispatch('close-modal');
    }

    // fungsi simpan data baru ke tabel kajian
    public function save()
    {
        $this->validate([
            'judul' => 'required|string|max:100',
            'deskripsi' => 'nullable|max:255',
            'foto' => 'nullable|image|max:2048', // max 2MB
            'jam' => 'required'
        ]);

        // Proses upload foto jika ada
        $filePath = null;
        if ($this->foto) {
            $filePath = $this->foto->store('kajian', 'public'); 
        }

        Kajian::create([
            'judul'      => $this->judul,
            'deskripsi'  => $this->deskripsi,
            'foto'       => $this->foto,
            'jam'        => $this->jam
        ]);

        // kirim sweetalert
        $this->dispatch('alert-success', message: 'Data kajian berhasil disimpan!');

        // reset form input
        $this->reset(['judul', 'deskripsi', 'foto', 'jam']);
    }

    public function delete($id)
    {
        $data = Kajian::find($id);

        if (!$data) return;

        // Hapus file foto jika ada
        if ($data->foto && \Storage::disk('public')->exists($data->foto)) {
            \Storage::disk('public')->delete($data->foto);
        }

        $data->delete();

        // Kirim event ke browser untuk alert
        $this->dispatch('alert-success', message: 'Data kajian berhasil dihapus!');
    }

   

    public function render()
    {
        $siang = Pengajian::where('waktu', 'siang')->orderBy('jam')->get();
        $malam = Pengajian::where('waktu', 'malam')->orderBy('jam')->get();

         $kajianList = Kajian::orderBy('judul')->get();

        return view('livewire.admin.activitas.index', compact('siang', 'malam', 'kajianList'));
    }
}
