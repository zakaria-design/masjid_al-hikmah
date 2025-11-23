<!-- Modal Bootstrap -->
<div class="modal fade" id="rekeningModalMandiri" tabindex="-1" aria-labelledby="rekeningModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title fw-bold" id="rekeningModalLabel">Informasi Rekening</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
            <label class="fw-semibold">Bank:</label>
            <p class="text-primary fw-bold m-0">Bank Mandiri</p>
        </div>

        <div class="mb-3">
            <label class="fw-semibold">Nama Rekening:</label>
            <p class="text-primary fw-bold m-0">Masjid Al-Hikmah</p>
        </div>


        <div class="mb-3">
            <label class="fw-semibold">Nomor Rekening:</label>
            <div class="d-flex justify-content-between align-items-center">
                <span id="noRekMandiri" class="fw-bold text-success fs-5">33345678901</span>

               <button onclick="copyRekening('noRekMandiri')">Salin</button>
            </div>
        </div>

      </div>
      <p class="small ps-3">Note : <span class="text-danger">setelah transfer jangan lupa isi form untuk pendataan kami</span></p>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>