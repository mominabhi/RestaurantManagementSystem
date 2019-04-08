<?php $__env->startSection('main_content'); ?>
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Online Orders
                </h3>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session('success')); ?>

                    </div>
            <?php endif; ?>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN ADVANCED TABLE widget-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget red">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> All Online Orders </h4>
                        <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                    </div>
                    <div class="widget-body">
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>
                                <th class="hidden-phone">#</th>
                                <th class="hidden-phone">user_id</th>
                                <th class="hidden-phone">User Name</th>
                                <th class="hidden-phone">cuisineList_id</th>
                                <th class="hidden-phone">quantity</th>
                                <th class="hidden-phone">created_at</th>
                                <th class="hidden-phone">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $online_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $online_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX">
                                    <td><?php echo e($online_order->id); ?></td>
                                    <td><?php echo e($online_order->user_id); ?></td>
                                    <td><?php echo e($online_order->user_name); ?></td>
                                    <td><?php echo e($online_order->cuisineList_id); ?></td>
                                    <td><?php echo e($online_order->quantity); ?></td>
                                    <td><?php echo e($online_order->created_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(URL::to('admin/delete_order/'.$online_order->id)); ?>"><button class="btn btn-danger">Order Complete</button></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
            </div>
        </div>
        <!-- END ADVANCED TABLE widget-->
    </div>
    <!-- END PAGE CONTAINER-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>