<?php echo $__env->make('pages.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('wrap'); ?>
    <div class="wrap">
        <br>

        <div class="col-md-8 col-md-offset-2">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h3 class="text-center" style="color: whitesmoke">User Registration</h3>
                        <form method="POST" action="<?php echo e(route('user.customer_registration')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="quantity">User Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">User Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">User Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Confirm Password:</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Phone Number:</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Address:</label>
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                            <input type="submit" class="button1 btn-block" value="User Registration">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>