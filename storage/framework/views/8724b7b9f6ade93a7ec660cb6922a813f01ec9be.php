
<?php $__env->startSection('main-content'); ?>
    <div class="section-title komponen container mt-5">
        <h3 class="pt-3 pb-3">
            <?php if(isset($prevRakitanData)): ?>
            <?php echo e($prevRakitanData->name); ?>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-html="true" title="<h5>Anda bisa membagikan url page ini ke teman anda">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
            <?php else: ?>
              <?php echo e(__('Simulasi Rakit PC')); ?>

            <?php endif; ?>
        </h3>
    </div>

    <section class="container d-flex justify-content-between mb-5">
        <table class="table">
            <thead>
                <tr class="heading-table">
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama Komponen</th>
                    <th scope="col">Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="py-4 category">CPU</th>
                    <?php if(session('cpus')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/cpu/'. session()->get('cpus')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('cpus')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('cpus')->formattedPrice); ?></td>
                        
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','cpus')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/cpus')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn add" type="submit">+ Add Item </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th class="py-4 category">Motherboard</th>
                    <?php if(session('motherboards')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/motherboard/'. session()->get('motherboards')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('motherboards')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('motherboards')->formattedPrice); ?></td>
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','motherboards')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/motherboards')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="selectedCpuId" value="<?php echo e(session('cpus') ? session()->get('cpus')->id : ''); ?>" >
                                    <button class="btn add" type="submit" <?php echo e(session('cpus') ? '' : 'disabled'); ?>>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th class="py-4 category">Memory</th>
                    <?php if(session('memories')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/memory/'. session()->get('memories')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('memories')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('memories')->formattedPrice); ?></td>
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','memories')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/memories')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="selectedMoboId" value="<?php echo e(session('motherboards') ? session()->get('motherboards')->id : ''); ?>" >
                                    <button class="btn add" type="submit" <?php echo e(session('motherboards') ? '' : 'disabled'); ?>>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th class="py-4 category">Internal Storage</th>
                    <?php if(session('internal_storages')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/internal-storage/'. session()->get('internal_storages')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('internal_storages')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('internal_storages')->formattedPrice); ?></td>
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','internal_storages')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/internal_storages')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="selectedMemoryId" value="<?php echo e(session('memories') ? session()->get('memories')->id : ''); ?>" >
                                    <button class="btn add" type="submit" <?php echo e(session('memories') ? '' : 'disabled'); ?>>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th class="py-4 category">GPU</th>
                    <?php if(session('gpus')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/gpu/'. session()->get('gpus')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('gpus')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('gpus')->formattedPrice); ?></td>
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','gpus')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/gpus')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="selectedStorageId" value="<?php echo e(session('internal_storages') ? session()->get('internal_storages')->id : ''); ?>" >
                                    <button class="btn add" type="submit" <?php echo e(session('internal_storages') ? '' : 'disabled'); ?>>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th class="py-4 category">Casing</th>
                    <?php if(session('cases')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/case/'. session()->get('cases')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('cases')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('cases')->formattedPrice); ?></td>
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','cases')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/cases')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="selectedGpuId" value="<?php echo e(session('gpus') ? session()->get('gpus')->id : ''); ?>" >
                                    <button class="btn add" type="submit" <?php echo e(session('gpus') ? '' : 'disabled'); ?>>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th class="py-4 category">Power Supply</th>
                    <?php if(session('power_supplies')): ?>
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="<?php echo e(asset('storage/images/pc-components/psu/'. session()->get('power_supplies')->image)); ?>" alt="...">
                            </div>
                            <div class="nama-komponen">
                                <?php echo e(session()->get('power_supplies')->name); ?>

                            </div>
                        </div>
                        </td>
                        <td class="py-4"><?php echo e(session()->get('power_supplies')->formattedPrice); ?></td>
                        <td class="py-4">
                            <?php if(!isset($prevRakitanData)): ?> 
                            <form action="<?php echo e(route('hapusItemSimulasi','power_supplies')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    <?php else: ?>    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="<?php echo e(url('/simulasi-rakit-pc/addComponent/power_supplies')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="selectedCaseId" value="<?php echo e(session('cases') ? session()->get('cases')->id : ''); ?>" >
                                    <input type="hidden" name="totalWattage" value="<?php echo e($totalWattage); ?>">
                                    <button class="btn add" type="submit" <?php echo e(session('cases') ? '' : 'disabled'); ?>>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </section>

    <div class="container pb-5">
        <div class="d-flex justify-content-end">
            <h3>Total : </h3>
            <h3 class="ms-3"><b><?php echo e($formattedTotalPrice); ?></b></h3>
        </div>
        <div class="d-flex justify-content-end">
            <div class="me-3">
                
                <?php if(isset($prevRakitanData)): ?>
                        
                        <a class="btn add view-CheckOut-J" href="<?php echo e(url('keranjang/'.$prevRakitanData->code)); ?>" role="button"> Bayar</a>
                
                <?php else: ?>  
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <button class="btn add" data-bs-toggle="modal" data-bs-target="#saveModal ">Simpan</button>
                            <?php echo $__env->make('simulasi-rakit-pc._save-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <a class="btn add" href="<?php echo e(route('login')); ?>">Simpan</a>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
                
            </div>

            <!-- <div class="pb-5" style="text-align: end;">
                <a class="btn tokopedia" href="#" role="button" onclick="<?php echo e($multipleUrlsScript); ?>"
                >Beli di Tokopedia</a>
            </div> -->
        </div>
    </div>
    
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\www\bycom\resources\views/simulasi-rakit-pc/index.blade.php ENDPATH**/ ?>