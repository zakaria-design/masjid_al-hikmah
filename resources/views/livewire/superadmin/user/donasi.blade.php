<div wire:ignore.self class="modal fade" id="donasiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" style="max-height: calc(100vh - 100px); overflow-y: auto;">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title"><i class="fas fa-plus mr-1"></i> Tambah Donasi</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="nama_donasi">Nama Pemasukan</label>
          <input wire:model="nama_donasi" type="text"
              class="form-control form-control @error('nama_donasi') is-invalid @enderror"
              placeholder="Masukkan Nama">
          @error('nama_donasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mt-2">
          <label for="uang_masuk">Nominal Uang masuk</label>
          <input wire:model="uang_masuk" type="text" id="uang_masuk_input"  wire:blur="$set('uang_masuk', number_format($uang_masuk,0,',','.'))" 
              class="form-control form-control @error('uang_masuk') is-invalid @enderror"
              placeholder="Masukkan Nominal uang masuk">
          @error('uang_masuk') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times mr-1"></i> Tutup
        </button>
        <button wire:click="storeDonasi" type="button" class="btn btn-sm btn-primary">
            <i class="fas fa-save mr-1"></i> Simpan
        </button>
      </div>
    </div>
  </div>
</div>

