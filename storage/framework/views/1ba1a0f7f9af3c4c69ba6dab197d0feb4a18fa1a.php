<?php echo $__env->make('pages.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('wrap'); ?>
    <div class="wrap">
        <br>
        <?php if(Session::has('success')): ?>
            <div class="alert alert-danger">
                <?php echo e(Session('success')); ?>

            </div>
        <?php endif; ?>
        <?php $__currentLoopData = $cuisines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuisine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div>
                            <?php
                            Session::put('cuisine_id_lulu',$cuisine->id);
                            ?>
                            <h2><?php echo e($cuisine->name); ?></h2>
                            <figure><img src="<?php echo e(asset($cuisine->image)); ?>" alt=""></figure>
                            <p class="pad_bot1">Price:<?php echo e($cuisine->price); ?> ৳</p>
                          <a href="<?php echo e(URL::to('cuisine_detail/'.$cuisine->id)); ?>" class="button1">See Detail</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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