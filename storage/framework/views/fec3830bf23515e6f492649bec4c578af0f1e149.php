<?php $__env->startSection('main_content'); ?>
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Data Table
                </h3>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session('success')); ?>

                    </div>
                    <?php endif; ?>
                <div class="breadcrumb">
                    <form action="#" class="hidden-phone">
                        <div class="input-append search-input-area">
                            <input class="" type="text">
                            <button class="btn" type="button"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
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
                        <h4><i class="icon-reorder"></i> All Cuisine List Table</h4>
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
                                <th class="hidden-phone">Name</th>
                                <th class="hidden-phone">Price</th>
                                <th class="hidden-phone">Food Type</th>
                                <th class="hidden-phone">Description</th>
                                <th class="hidden-phone">Image</th>
                                <th class="hidden-phone">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $cuisines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuisine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX">
                                    <td><?php echo e($cuisine->id); ?></td>
                                    <td><?php echo e($cuisine->name); ?></td>
                                    <td><?php echo e($cuisine->price); ?></td>
                                    <td><?php echo e($cuisine->type); ?></td>
                                    <td><?php echo e($cuisine->description); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset($cuisine->image)); ?>" style="width: 50px; height: 50px">
                                    </td>
                                    <td>
                                       <a href="<?php echo e(URL::to('admin/edit_cuisine/'.$cuisine->id)); ?>"><button class="btn btn-primary">Edit</button></a>
                                       <a href="<?php echo e(URL::to('admin/delete_cuisine/'.$cuisine->id)); ?>"><button class="btn btn-danger">Delete</button></a>
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