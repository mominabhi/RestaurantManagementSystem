<?php echo $__env->make('pages.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('wrap'); ?>
<div class="wrap">
    <br>
<section class="col-1-3">
<div class="wrap-col">
<div class="box">
<div>
<h2>Did You <span>Know</span></h2>
<figure><img src="<?php echo e(asset('asset/images/page2_img1.jpg')); ?>" alt=""></figure>
<p class="pad_bot1">Neque porro quisquam est, qui dolor- em ipsum qudolor sitamet consectetur
adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
<a href="#" class="button1">Read More</a>
</div>
</div>
</div>
</section>
</div>
<?php $__env->stopSection(); ?>


    
    
    
    
        
            
        
    

<?php $__env->startSection('wrapper'); ?>
    <div class="wrapper">
        <section>
            <h2>Banquet’s Specials</h2>
            <div class="wrapper">
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="wrapper pad_bot1">
                            <figure class="pad_bot1"><img src="<?php echo e(asset('asset/images/page2_img3.jpg')); ?>" alt="">
                            </figure>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col mag-1">
                        <div class="wrapper pad_bot1">
                            <figure class="pad_bot1"><img src="<?php echo e(asset('asset/images/page2_img4.jpg')); ?>" alt="">
                            </figure>
                            Labore et dolore magna aliqua. Ut <br>
                            enim minim veniam quis nostrud exer-<br>citation ullamco.
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col mag-1">
                        <div class="wrapper pad_bot1">
                            <figure class="pad_bot1"><img src="<?php echo e(asset('asset/images/page2_img5.jpg')); ?>" alt="">
                            </figure>
                            Labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exer- citation ullamco.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>