<!-- Modal Bootstrap 5 -->
    <div wire:ignore.self class="modal fade" id="addKajianModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold">Tambah Kajian Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    
                    <div class="mb-3">
                        <label class="form-label">Judul Kajian</label>
                        <input type="text" wire:model="judul" class="form-control" required>
                        @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea wire:model="deskripsi" class="form-control" required></textarea>
                        @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" wire:model="foto" class="form-control" required>

                        <!-- Preview -->
                        @if ($foto)
                            <img src="{{ $foto->temporaryUrl() }}" class="img-fluid mt-2 rounded" style="max-height:150px;">
                        @endif

                        @error('foto') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Jam</label>
                        <input type="time" wire:model="jam" class="form-control" required>
                        @error('jam') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button wire:click="save" class="btn btn-primary">
                        Simpan
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>