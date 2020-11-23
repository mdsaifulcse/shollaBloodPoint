
<?php $__env->startSection('title'); ?>
    Blood Request | Sholla Blood Point
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
                                    <h2><i class="fa fa-tint blood"></i> Make a Blood Request</h2>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="blood-request-list.html">
                                                    <span class="text-primary pull-right"><i class="fa fa-link" aria-hidden="true"></i> Blood Request List</span>
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
                                    <h3 class="text-center text-success">
                                        <?php
                                        $success=Session::get('success');
                                        echo $success;
                                        $error=Session::get('error');
                                        echo $error;
                                        ?>
                                    </h3>
                                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 col-mb-12">
                                        <?php echo Form::open(['url' => 'blood-request','method'=>'POST']); ?>


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Name <sup class="text-danger">*</sup> </label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <?php echo e(Form::text('name',$value=old('name'),['placeholder'=>'Your Name','required'=>true])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('name')?$errors->first('name'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Contact No: <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <?php echo e(Form::number('mobile',$value=old('mobile'),['placeholder'=>'Contact Number','min'=>11,'required'=>true])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('mobile')?$errors->first('mobile'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Required Blood Group <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <?php echo e(Form::select('blood_group_id',$bloodGroups,[],['class'=>'form-control','placeholder'=>'Select Blood Group','required'=>true])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('blood_group_id')?$errors->first('blood_group_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Amount(Unit/Bag) <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <?php echo e(Form::number('amount',$value=old('amount'),['placeholder'=>'Required blood amount','min'=>0,'required'=>true])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('amount')?$errors->first('amount'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label>Disease <sup class="text-danger">*</sup> </label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <?php echo e(Form::text('disease',$value=old('disease'),['placeholder'=>'Disease of Patient ','required'=>true])); ?>

                                                <span class="text-danger"><?php echo e($errors->has('disease')?$errors->first('disease'):''); ?></span>
                                            </div>
                                        </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Patient's Present Location <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <?php echo e(Form::text('patient_location',$value=old('patient_location'),['placeholder'=>'Name of hospital where patient admitted / Patient present location','required'=>true])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('patient_location')?$errors->first('patient_location'):''); ?></span>
                                                </div>
                                            </div><!--end row-->


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Patient's Present District <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                   <?php echo e(Form::select('district_id',$districts,[],['class'=>'form-control','placeholder'=>'Select District','required'=>true])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('district_id')?$errors->first('district_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Date of Donation <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group date">
                                                        <input type="text" name="date_of_donation" class="form-control datepicker">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('date_of_donation')?$errors->first('date_of_donation'):''); ?></span>
                                                </div>
                                            </div><!--end row-->


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>More Message</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <?php echo e(Form::textarea('message',$value=old('message'),['class'=>'form-control','placeholder'=>'Blood importance, Patient Situation, Disease','rows'=>4])); ?>

                                                    <span class="text-danger"><?php echo e($errors->has('message')?$errors->first('message'):''); ?></span>

                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Please give answer
                                                        <strong class="text-danger">
                                                            <span id="firstNumber"><?php echo e($firstNumber); ?></span>
                                                            <span id="secondNumber">+ <?php echo e($secondNumber); ?> =</span>
                                                        </strong>
                                                    </label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <input type="hidden" name="first_number" value="<?php echo e($firstNumber); ?>" min=0 required>
                                                    <input type="hidden" name="second_number" value="<?php echo e($secondNumber); ?>" min=0 required>

                                                    <input type="number" name="answer" min=0 required>
                                                    <span class="text-danger"><?php echo e($errors->has('answer')?$errors->first('answer'):''); ?></span>
                                                    <span class="text-danger">
                                                        <?php
                                                        $msg=Session::get('msg');
                                                        echo $msg;
                                                        ?>
                                                    </span>



                                                </div>
                                            </div><!--end row-->
                                            <button class="default-big-btn pull-right" type="submit" value="Login"><i class="fa fa-send"></i> Send Request</button>
                                        <?php echo Form::close(); ?>

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