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

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
        
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/app.css?v=').time()); ?>">
    
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bycom\resources\views/layouts/wrapper.blade.php ENDPATH**/ ?>