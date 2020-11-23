
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a> Dashboard </a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <?php
                $color = ['yellow','green','red','blue'];
                $c=0;
                ?>
                <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                    <div class="well">
                        <hr style="border: 1px solid red">
                        <hr style="border: 1px solid green">
                        <h3 class="text-center">Welcome to Sholla Blood Point <span> Admin Panel </span> </h3>
                        <hr style="border: 1px solid green">
                        <hr style="border: 1px solid red">
                    </div>
                </div>
            </div>

            <!-- project and updates end -->
        </div>
        <!-- [ page content ] end -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>