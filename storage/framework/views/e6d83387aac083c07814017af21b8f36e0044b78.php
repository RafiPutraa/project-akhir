    <!-- Modal -->
    <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="saveModalLabel">Simpan Rakitan PC ?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="post" action="<?php echo e(route('saveSimulasi')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                  <input type="hidden" name="userId" value="<?php echo e(Auth::user()->id); ?>">
                  <input type="hidden" name="cpuId" value="<?php echo e(session('cpus') ? session()->get('cpus')->id : ''); ?>">
                  <input type="hidden" name="moboId" value="<?php echo e(session('motherboards') ? session()->get('motherboards')->id : ''); ?>">
                  <input type="hidden" name="memoryId" value="<?php echo e(session('memories') ? session()->get('memories')->id : ''); ?>">
                  <input type="hidden" name="inStorageId" value="<?php echo e(session('internal_storages') ? session()->get('internal_storages')->id : ''); ?>">
                  <input type="hidden" name="gpuId" value="<?php echo e(session('gpus') ? session()->get('gpus')->id : ''); ?>">
                  <input type="hidden" name="caseId" value="<?php echo e(session('cases') ? session()->get('cases')->id : ''); ?>">
                  <input type="hidden" name="psuId" value="<?php echo e(session('power_supplies') ? session()->get('power_supplies')->id : ''); ?>">
                  <input type="hidden" name="totalPrice" value="<?php echo e($totalPrice); ?>">
                  <div class="form-group mb-3">
                    <label for="nama-rakitan">Masukkan nama rakitan anda</label>
                    <input type="text" class="form-control" id="nama-rakitan" name="name" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn add btn-primary">Simpan</button>
                </div>
              </form>
          </div>
      </div>
  </div><?php /**PATH C:\laragon\www\bycom\resources\views/simulasi-rakit-pc/_save-modal.blade.php ENDPATH**/ ?>