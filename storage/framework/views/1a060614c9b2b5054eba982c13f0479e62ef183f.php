<?php $__env->startSection('main_content'); ?>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">
                Add Food Item
            </h3>
            <!-- END PAGE TITLE-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>