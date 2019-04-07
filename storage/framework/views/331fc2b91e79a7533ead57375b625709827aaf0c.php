<?php $__env->startSection('main_content'); ?>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">
                Add Food Item
            </h3>
            <?php if(count($errors)>0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- END PAGE TITLE-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="widget green">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Add Cuisine</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="widget-body form">
                    <!-- BEGIN FORM-->
                    <form class="cmxform form-horizontal" method="post" action="<?php echo e(route('admin.cuisine_update')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input value="<?php echo e($cuisine->id); ?>" type="hidden" name="id">
                        <div class="control-group ">
                            <label for="name" class="control-label">Name</label>
                            <div class="controls">
                                <input class="span6 "  name="name" type="text"  value="<?php echo e($cuisine->name); ?>"/>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="price" class="control-label">Price</label>
                            <div class="controls">
                                <input class="span6 " name="price" type="number" value="<?php echo e($cuisine->price); ?>" />
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="type" class="control-label">Cuisine Type</label>
                            <div class="controls">
                                <select class="span6" name="type">
                                    <option>Barger</option>
                                    <option>Pizza</option>
                                    <option>Nuduls</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="description" class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span6" name="description"><?php echo e($cuisine->description); ?></textarea>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="image" class="control-label">Image</label>
                            <div class="controls">
                                <input class="span6" name="image" type="file" value="<?php echo e($cuisine->image); ?>"/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-success" value="Save">
                            <button class="btn" type="button">Cancel</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>