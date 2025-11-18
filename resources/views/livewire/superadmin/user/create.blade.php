<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" style="max-height: calc(100vh - 100px); overflow-y: auto;">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title"><i class="fas fa-plus mr-1"></i> Tambah Pengeluaran</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="nama_pengeluaran">Nama Pengeluaran</label>
          <input wire:model="nama_pengeluaran" type="text"
              class="form-control form-control @error('nama_pengeluaran') is-invalid @enderror"
              placeholder="Masukkan Nama">
          @error('nama_pengeluaran') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mt-2">
          <label for="jenis_pengeluaran">Jenis Pengeluaran</label>
          <select wire:model="jenis_pengeluaran" id="jenis_pengeluaran" class="form-control">
              <option value="">--Pilih Jenis Pengeluaran--</option>
              <option value="konsumtif">Konsumtif</option>
              <option value="operasional">Operasional</option>
              <option value="peralatan">Peralatan</option>
          </select>
          @error('jenis_pengeluaran') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mt-2">
          <label for="uang_keluar">Nominal Uang Keluar</label>
          <input wire:model="uang_keluar" type="number"
              class="form-control @error('uang_keluar') is-invalid @enderror"
              placeholder="Masukkan Nominal uang keluar">
          @error('uang_keluar') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times mr-1"></i> Tutup
        </button>
        <button wire:click="store" type="button" class="btn btn-sm btn-primary">
            <i class="fas fa-save mr-1"></i> Simpan
        </button>
      </div>
    </div>
  </div>
</div>
