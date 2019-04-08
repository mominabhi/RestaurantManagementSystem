        <?php echo $__env->make('pages.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__env->startSection('wrap'); ?>
            <div class="wrap">
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <div class="wrap-col">
                        <div class="box">
                            <div>
                                <h2><?php echo e($cuisine->name); ?></h2>
                                <figure><img src="<?php echo e(asset($cuisine->image)); ?>" alt=""></figure>
                                <p class="pad_bot1">Price:<?php echo e($cuisine->price); ?> ৳</p>
                                <p class="pad_bot1">Cuisine Type:<?php echo e($cuisine->type); ?></p>
                                <p class="pad_bot1"><?php echo e($cuisine->description); ?></p>
                                <form method="POST" action="<?php echo e(route('cuisine.order')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="cuisineList_id" value="<?php echo e($cuisine->id); ?>">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="quantity">Quantity:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" name="quantity" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" class="button1 btn-block" value="For Order">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
            </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>