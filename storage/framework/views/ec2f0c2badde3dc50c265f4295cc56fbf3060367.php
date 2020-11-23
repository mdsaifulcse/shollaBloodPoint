<?php $__env->startSection('title'); ?>
    <?php echo e($organizationInfo->compoany_name); ?> | Sholla Blood Point
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2> <img src="<?php echo e(asset($organizationInfo->logo)); ?>" width="40" alt="<?php echo e($organizationInfo->company_name); ?>" title="<?php echo e($organizationInfo->company_name); ?>"> About <?php echo e($organizationInfo->company_name); ?> </h2>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3 page">
                            <div class="login-form">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12 text-justify col-lg-offset-1 col-md-offset-1">
                                    <img src="<?php echo e(asset($organizationInfo->logo)); ?>" class="img-responsive img-thumbnail img-circle img-responsive center-block">
                                    <?php echo($organizationInfo->short_description)?>
                                    </div>

                                    <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 text-justify">
                                        <hr>
                                        <?php echo($organizationInfo->description)?>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>