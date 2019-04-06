<?php $__env->startSection('wrapper'); ?>
<div class="wrapper">
    <section class="col-2-3">
        <h2>Upcoming Events</h2>
        <div class="wrapper">
            <div class="col-1-2"><div class="wrap-col">
                    <div class="wrapper pad_bot2">
                        <figure class="left marg_right1"><img src="<?php echo e(asset('asset/images/page1_img4.jpg')); ?>" alt=""></figure>
                        <p>
                            <a href="#">20.07. Sed perspiciatis</a><br>
                            Unde omnis iste natus error volu accusantium doloremque.
                        </p>
                    </div>
                    <div class="wrapper">
                        <figure class="left marg_right1"><img src="<?php echo e(asset('asset/images/page1_img5.jpg')); ?>" alt=""></figure>
                        <p>
                            <a href="#">18.07. Quasi architecto</a><br>
                            Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.
                        </p>
                    </div>
                </div></div>
            <div class="col-1-2"><div class="wrap-col">
                    <div class="wrapper pad_bot2">
                        <figure class="left marg_right1"><img src="<?php echo e(asset('asset/images/page1_img6.jpg')); ?>" alt=""></figure>
                        <p>
                            <a href="#">11.07. Laudaum totam</a><br>
                            Rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                        </p>
                    </div>
                    <div class="wrapper">
                        <figure class="left marg_right1"><img src="<?php echo e(asset('asset/images/page1_img7.jpg')); ?>" alt=""></figure>
                        <p>
                            <a href="#">09.07. Volups asrnatur</a> <br>
                            Aut odit aut fugit, sed quia consequuntur magni dolores eos qui.
                        </p>
                    </div>
                </div></div>
        </div>
    </section>
    <section class="col-1-3"><div class="wrap-col">
            <h2>Testimonials</h2>
            <ul class="testimonials">
                <li class="row">
                    <span>1</span>
                    <p>
                        “Remperam eaquepsa quae abillo inventore vertatis.”
                        <img src="<?php echo e(asset('asset/images/signature1.jpg')); ?>" alt="">
                    </p>
                </li>
                <li class="row">
                    <span>2</span>
                    <p>
                        “Quasi arctecto beatae vitae dicta sunt explicabo.”
                        <img src="<?php echo e(asset('asset/images/signature2.jpg')); ?>" alt="">
                    </p>
                </li>
                <li class="row">
                    <span>3</span>
                    <p>
                        “Nemo enim ipsam volupta<br>
                        tem quia voluptas.”<img src="<?php echo e(asset('asset/images/signature3.jpg')); ?>" alt="">
                    </p>
                </li>
            </ul>
        </div></section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>