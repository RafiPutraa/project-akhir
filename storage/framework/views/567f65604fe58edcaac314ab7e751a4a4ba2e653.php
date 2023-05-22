<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>BangunPC - Build Your Computer</title>
    <meta name="description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="BangunPC - Build Your Computer">
    <meta itemprop="description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <meta itemprop="image" content="<?php echo e(URL::asset('images/favicon.png?v=').time()); ?>">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://bycom.eastus2.cloudapp.azure.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="BangunPC - Build Your Computer">
    <meta property="og:description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <meta property="og:image" content="<?php echo e(URL::asset('images/favicon.png?v=').time()); ?>">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BangunPC - Build Your Computer">
    <meta name="twitter:description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <meta name="twitter:image" content="<?php echo e(URL::asset('images/favicon.png?v=').time()); ?>">

    <link rel="shortcut icon" href="<?php echo e(URL::asset('images/favicon.png?v=').time()); ?>" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/app.css?v=').time()); ?>">

    <?php echo $__env->yieldContent('head-content'); ?>

</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <?php echo $__env->yieldContent('main-content'); ?>
        <div class="feedback-widget" style="background-color: green ;">
            <div class="feedback-widget-item" onclick="window.open('http://wa.me/628993879735','_blank');">
                <!-- <div>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                        <title>Contact Us</title>
                        <path d='M408 64H104a56.16 56.16 0 00-56 56v192a56.16 56.16 0 0056 56h40v80l93.72-78.14a8 8 0 015.13-1.86H408a56.16 56.16 0 0056-56V120a56.16 56.16 0 00-56-56z' fill='green' stroke='currentColor' stroke-linejoin='round' stroke-width='32' />
                        <circle cx='160' cy='216' r='32' />
                        <circle cx='256' cy='216' r='32' />
                        <circle cx='352' cy='216' r='32' />
                    </svg>
                </div> -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"  stroke-linejoin='round' stroke-width='32' />
                        <circle cx='160' cy='216' r='32' />
                        <circle cx='256' cy='216' r='32' />
                        <circle cx='352' cy='216' r='32' />
                    </svg>
                </div>
            </div>
        </div>
    </main>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    

    <!-- custom js file link  -->
    <script>
        var swiper = new Swiper(".product-slider", {
            spaceBetween: 10,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                450: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <?php echo $__env->yieldContent('js-content'); ?>
</body>

</html><?php /**PATH C:\laragon\www\bycom\resources\views/layouts/app.blade.php ENDPATH**/ ?>