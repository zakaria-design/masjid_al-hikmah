<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Pengajian;

class Index extends Component
{
    public function render()
    {
        $siang = Pengajian::where('waktu', 'siang')->orderBy('jam')->get();
        $malam = Pengajian::where('waktu', 'malam')->orderBy('jam')->get();

        return view('livewire.admin.dashboard.index', compact('siang', 'malam'));
    }
}
