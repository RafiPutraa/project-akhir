
<?php $__env->startSection('main-content'); ?>
<section class="d-flex justify-content-between">

  <div class="list-content container mt-5" style="margin: 0px 30px;">
      <div class="pt-5 pb-5 box-category" id="casing-pc">
          <div class="container add-category">
              <h3><?php echo e($data->categoryTitle); ?></h3>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px; flex-wrap: wrap;">
            <?php $__currentLoopData = $data->pcComponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
            <div class="card">
                <center><img src="<?php echo e(asset('storage/images/pc-components/'.$data->imageFolder.'/'.$pcComponent->image)); ?>" class="card-img-top" alt="..."></center>
                <div class="card-body mt-3">
                    <h5 class="card-title"><?php echo e($pcComponent->name); ?></h5>
                    <p class="card-text"><?php echo e($pcComponent->price); ?></p>
                    <form action="<?php echo e(url('simulasi-rakit-pc/addComponent/'.$table.'/'.$pcComponent->id)); ?>" method="post" style="text-align: center">
                        <?php echo csrf_field(); ?>                        
                        <button type="submit" class="btn add simulasi">+ Add Item</button >
                    </form>
                    <div style="text-align: center">
                        <a href="<?php echo e(url('katalog/'.$table.'/'.$pcComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bycom\resources\views/simulasi-rakit-pc/add-component.blade.php ENDPATH**/ ?>