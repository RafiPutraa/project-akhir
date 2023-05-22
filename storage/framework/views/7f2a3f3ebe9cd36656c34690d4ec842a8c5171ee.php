
<?php $__env->startSection('content'); ?>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div id="success_message"></div>
      
      <p class="card-title mt-3">List Data</p>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-hover expandable-table datatable" style="width:100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Email User</th>
                  <th>Kode Rakitan</th>
                  <th>Nama Rakitan</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
          </table>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-content'); ?>
<script>
  // Get All Data into table
  $(document).ready(function () {
    $('.datatable').DataTable({
        ajax: '<?php echo e(url("admin/custom-build/getAllDatatable")); ?>',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'userEmail', name: 'userEmail'},
            {data:'code', name: 'code'},
            {data:'name', name: 'name'},
            {data:'totalPrice', name: 'totalPrice'},
        ]
    });
  });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bycom\resources\views/admin/pc-builds/user-build/index.blade.php ENDPATH**/ ?>