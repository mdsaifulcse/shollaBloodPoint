<?php $__env->startSection('title'); ?>
    Founder Members of Sholla Blood Point Dhaka
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Blood Bank list start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2><i class="fa fa-tint blood" aria-hidden="true"></i> Sholla Blood Point Founder Members </h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="category-list-layout3">

                            <div class="row">
                                <?php if(count($founderMembers)>0): ?>
                                    <?php $__currentLoopData = $founderMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $founderMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="founder-member">
                                            <img src="<?php echo e(asset($founderMember->photo)); ?>" alt="<?php echo e($founderMember->name); ?>" class="img-responsive img-circle center-block">
                                            <div class="founder-member-info">
                                                <h4><span> <?php echo e($founderMember->name); ?></span></h4>
                                                <h4><span> <?php echo e($founderMember->designation); ?></span></h4>
                                                <h4>Blood Group : <span> <?php echo e($founderMember->fmBloodGroup->name); ?></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php else: ?>
                                    <h1 class="text-center text-danger"> No Founder Member</h1>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Blood bank lis end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>