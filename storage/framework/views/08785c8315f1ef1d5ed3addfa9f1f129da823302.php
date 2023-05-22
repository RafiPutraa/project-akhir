
<?php $__env->startSection('main-content'); ?>
<div class="section-title komponen container mt-5">
  <h3 class="pt-3 pb-3">DAFTAR RAKITANKU</h3>
</div>

<section class="container d-flex justify-content-between mt-5 mb-5">
  <table class="table">
      <thead>
          <tr class="heading-table">
              <th scope="col"> 
                Kode Rakitan
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="<h5>Masukkan kode di url: /rakitanku/<b>kode-rakitan</b></h5>">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              </th>
              <th scope="col">Judul Rakitan</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $listRakitan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rakitan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
        <tr>
            <th class="py-4 category"><?php echo e($rakitan->code); ?></th>
            <td class="py-4 nama-komponen rakitanku"><?php echo e($rakitan->name); ?></td>
            <td class="py-4"><?php echo e($rakitan->totalPrice); ?></td>
            
            <td class="btn-view">
              <a class="btn add view-details" href="<?php echo e(url('rakitanku/'.$rakitan->code)); ?>" role="button"> View</a>
              <a class="btn add view-CheckOut-J" href="<?php echo e(url('keranjang/'.$rakitan->code)); ?>" role="button"> Bayar</a>
            </td>
            <!-- <td class="btn-view"><a class="btn add view-details" href="/keranjang" role="button"> ChecOut</a></td> -->
           
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
      </tbody>
  </table>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bycom\resources\views/keranjang/index.blade.php ENDPATH**/ ?>