<?php echo $__env->make('pages.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('wrap'); ?>
    <div class="wrap">
        <br>
        <h3 class="text-center" style="color: whitesmoke">User Login</h3>
        <div class="col-md-8 col-md-offset-2">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <form method="POST" action="<?php echo e(route('user.customer_login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="quantity">User Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">User Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                                <input type="submit" class="button1 btn-block" value="For Order">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>