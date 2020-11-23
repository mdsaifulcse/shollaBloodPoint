
<?php $__env->startSection('title'); ?>
    Photo Gallery of Sholla Blood Point Dhaka
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
                                    <h2><i class="fa fa-tint blood" aria-hidden="true"></i> Sholla Blood Point Photo Gallery </h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="category-list-layout3">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
                                    <div class="table-responsive">
                                        <table id="foundermembers" class="table table-striped table-hover table-bordered center_table">
                                            <thead>
                                            <tr class="my-bg">
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Link</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1?>
                                            <?php $__currentLoopData = $photoGallerys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photoGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($i++); ?></td>
                                                    <td><?php echo e($photoGallery->title); ?></td>
                                                    <td><?php echo e(date('d-m-Y',strtotime($photoGallery->event_date))); ?></td>
                                                    <td><a href="<?php echo e($photoGallery->photo_link); ?>" target="_blank"> Photo Link <i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div><!-- end col-->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Blood bank lis end-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>