
<?php $__env->startSection('title'); ?>
    Search Required Blood Donor | Sholla Blood Point
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Blood Request start -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <h2><i class="fa fa-tint blood"></i> Required Blood Search </h2>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(URL::to('/blood-banks-list.html')); ?>">
                                                    <span class="text-primary pull-right"><i class="fa fa-hospital-o" aria-hidden="true"></i> Blood Bank List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3">
                            <div class="login-form">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 col-mb-12">

                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12"><label>Required Blood Group <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <select class="form-control" name="" required="required">
                                                        <option value="">--Select One--</option>
                                                        <option>O (-v)</option>
                                                        <option>O (+v)</option>
                                                        <option>A (-v)</option>
                                                        <option>A (+v)</option>
                                                        <option>AB (-v)</option>
                                                    </select>
                                                </div>
                                            </div> <!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Status <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <select class="form-control" name="" required="required">
                                                        <option value="">--Select One--</option>
                                                        <option>Donate Blood</option>
                                                        <option>If Urgent, I can Donate</option>
                                                        <option>Not Interested Yet, Donate in Futures</option>
                                                    </select>
                                                </div>
                                            </div> <!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Email </label>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <input type="email" name="" placeholder="Search donor by email">
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>District</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <select class="form-control" name="">
                                                        <option>Dhaka</option>
                                                        <option>Chittagonj</option>
                                                        <option>Dhaka</option>
                                                    </select>
                                                </div>
                                            </div><!--end row-->


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Location</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <input type="text" name="" placeholder="Search by donor location" >
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Contact No</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <input type="number" min="0">
                                                </div>
                                            </div><!--end row-->

                                            <button class="default-big-btn pull-right" type="submit"><i class="fa fa-search"></i> Search </button>
                                        </form>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
    <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>