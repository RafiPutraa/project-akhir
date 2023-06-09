
<?php $__env->startSection('content'); ?>
  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-md-4 mb-2 stretch-card">
        <div class="card shadow p-1 mb-5 card-light-danger">
          <div class="card-body">
            <p class="mb-4">Jumlah User</p>
            <p class="fs-30 mb-2"><?php echo e($countData['user']); ?></p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-2 stretch-card">
        <div class="card shadow p-1 mb-5 card-tale">
          <div class="card-body">
            <p class="mb-4">Total Komponen PC</p>
            <p class="fs-30 mb-2"><?php echo e($countData['totalComponent']); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-2 stretch-card">
        <div class="card shadow p-1 mb-5 card-light-blue">
          <div class="card-body">
            <p class="mb-4">Jumlah Rakitan PC</p>
            <p class="fs-30 mb-2"><?php echo e($countData['UserPcBuild']); ?></p>
          </div>
        </div>
      </div>

    </div>
    <h3>Stok Komponen PC</h3>
    <div class="row">
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">CPU</p>
            <p class="fs-30 mb-2"><?php echo e($countData['cpu']); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Motherboard</p>
            <p class="fs-30 mb-2"><?php echo e($countData['mobo']); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">GPU</p>
            <p class="fs-30 mb-2"><?php echo e($countData['gpu']); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 mb-lg-0 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Memory</p>
            <p class="fs-30 mb-2"><?php echo e($countData['memory']); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Power Supply</p>
            <p class="fs-30 mb-2"><?php echo e($countData['psu']); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Internal Storage</p>
            <p class="fs-30 mb-2"><?php echo e($countData['storage']); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Casing PC</p>
            <p class="fs-30 mb-2"><?php echo e($countData['case']); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bycom\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>