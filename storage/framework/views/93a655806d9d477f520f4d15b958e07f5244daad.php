

<?php $__env->startSection('main-content'); ?>
<div class="section-title container mt-5" style="border-bottom: 1px solid #000000;">
    <h3 class="pt-3 pb-3"><?php echo e($detailComponent->name); ?></h3>
</div>

<section class="container d-flex justify-content-between mt-5 mb-5 list-katalog">
    <div class="gallery">
        <div class="container-gallery mb-4 pt-5 pb-5">
            <!-- Expanded image -->
            <img id="expandedImg" style="width: 250px" src="<?php echo e(asset('storage/images/pc-components/'.$imageFolder .'/' .$detailComponent->image)); ?>">
        </div>
    </div>
    <div class="detail-content container ms-3">
        <div class="container bg-blur mb-3 pt-3 pb-2">
            <div class="d-flex justify-content-between mt-5 mb-5 ms-5 me-5">
                <h5>Harga</h5>
                <h5><?php echo e($detailComponent->price); ?></h5>
            </div>
        </div>
        <div class="container bg-blur mt-3 mb-3 pt-3 pb-2">
           <pre class="ms-5"><?php echo e($detailComponent->description); ?></pre> 
        </div>

        <div class="d-flex justify-content-end btn-grup pt-2">
            
            <a class="btn tokopedia" href="<?php echo e($detailComponent->url); ?>" target="_blank" role="button">Beli di Tokopedia</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\www\bycom\resources\views/katalog/detail-component.blade.php ENDPATH**/ ?>