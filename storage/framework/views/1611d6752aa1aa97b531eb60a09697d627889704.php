

<?php $__env->startSection('main-content'); ?>
<section class="about">
        <div class="main">
            <img src="<?php echo e(asset('images/about.png')); ?>" alt="About Us">
            <div class="about-text">
                <h2>About Us</h2>
                <p>E-Computer Shop adalah tempat untuk kalian membeli perangkat-perangkat komputer yang kalian inginkan. Disini kalian dapat membeli semua perangkat komputer dari mulai harga yang terjangkau sampai dengan perangkat dengan performa maksimal. Tentunya dengan proses yang cepat dan pelayan yang ramah, E-Computer Shop adalah tempat terbaik untuk membangun komputer impian kalian.</p>
            </div>
            </div>
            <div class="service">
                <div class="title">
                    <h2>Testimony</h2>
                </div>
                <div class="box">
                    <div class="card">
                        <i class="fas fa-user"></i>
                        <h5>Anggit</h5>
                        <div class="pra">
                            <p>E-Computer Shop adalah tempat membeli perangkat komputer yang sangat lengkap dan juga terpercaya.</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <i class="fas fa-user"></i>
                        <h5>Dea</h5>
                        <div class="pra">
                            <p>Pelayanan yang ramah dan banyaknya pilihan untuk komponen-komponen komputer yang dapat dipilih.</p>
                        </div>
                    </div>

                    <div class="card">
                        <i class="fas fa-user"></i>
                        <h5>Rafi</h5>
                        <div class="pra">
                            <p>Harga yang terjangkau, produk yang unggul, dan juga terpercaya. Sangat direkomendasikan.</p>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <style>
        .about{
            width: 100%;
            padding: 50px 0px;
        }
        .about-text{
            width: 550px;
        }
        .main{
            width: 1130px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .about img{
            height: auto;
            width: 430px;
        }
        .about-text h2{
            font-size: 75px;
            text-transform: capitalize;
            margin-bottom: 20px;
        }
        .about-text p{
            letter-spacing: 1px;
            font-size: 18px;
            margin-bottom: 45px;
            line-height: 28px;
        }
        .service{
            width: 100%;
            padding: 100px 0px;
        }
        .title h2{
            font-size: 75px;
            width: 1130px;
            margin: 30px auto;
            text-align: center;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 400px;
        }
        .card{
            height: 365px;
            width: 335px;
            padding: 20px 35px;
            background: #222529;
            border-radius: 20px;
            margin: 15px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .card i{
            font-size: 50px;
            display: block;
            text-align: center;
            margin: 25px 0px;
            color: #FFAE5D;
        }
        h5{
            color: white;
            font-size: 23px;
            margin-bottom: 15px;
        }
        .pra p{
            color: white;
            font-size: 16px;
            line-height: 27px;
            margin-bottom: 25px;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\www\projectakhir\resources\views/about/index.blade.php ENDPATH**/ ?>