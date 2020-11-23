

<?php $__env->startSection('title'); ?>
    Edit profile | Sholla Blood Point
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h2><i class="fa fa-tint blood"></i> Update your profile</h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(URL::to('/last-blood-donation')); ?>">
                                                        <span class="text-primary pull-right">
                                                            <i class="fa fa-pencil"></i> Last Blood Donation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3">
                            <?php if($memberInfo!=null): ?>
                                <div class="login-form">
                                    <div class="row">
                                        <?php if($msg=Session::get('success')): ?>
                                            <h3 class="text-center text-success"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo e($msg); ?></h3>
                                        <?php elseif($msg=Session::get('error')): ?>
                                            <h3 class="text-center text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo e($msg); ?></h3>
                                        <?php endif; ?>
                                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 col-mb-12">
                                            <?php echo Form::open(['url'=>'edit-profile','method'=>'POST','class'=>'donor-register','files'=>true]); ?>


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Name <sup class="text-danger">*</sup> </label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::text('name',$value=$memberInfo->userData->name,['class'=>'form-control','placeholder'=>'Your name','required'=>true])); ?>

                                                        <?php echo e(Form::hidden('id',$value=$memberInfo->id)); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user-md"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('name')?$errors->first('name'):''); ?></span>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Gender <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group" >
                                                        <?php echo e(Form::select('gender',['Male'=>'Male','Female'=>'Female'],$memberInfo->gender,['class'=>'form-control','placeholder'=>'-- Please select Gender--','required'=>true])); ?>


                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('gender')?$errors->first('gender'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Father Name <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::text('father_name',$value=$memberInfo->father_name,['class'=>'form-control','placeholder'=>'Your father name','required'=>true])); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('father_name')?$errors->first('father_name'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>District <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::select('district_id',$districts,$memberInfo->district_id,['id'=>'loadThana','class'=>'form-control','placeholder'=>'-- Select District --','required'=>true])); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-university" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('district_id')?$errors->first('district_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Thana/upazila <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group" >
                                                        <div id="thanaUpazila">
                                                            <?php echo e(Form::select('thana_upazila_id',$thans,$memberInfo->thana_upazila_id,['class'=>'form-control','placeholder'=>'--First Select District --','required'=>true])); ?>

                                                        </div>
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-university" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('thana_upazila_id')?$errors->first('thana_upazila_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Union</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <div id="UnionInfo">
                                                            <?php echo e(Form::select('union_id',$unions,$memberInfo->union_id,['id'=>'loadVillage','class'=>'form-control','placeholder'=>'-- Select Thana First --','required'=>true])); ?>

                                                        </div>
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('union_id')?$errors->first('union_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Village</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <div id="villageInfo">
                                                            <?php echo e(Form::select('village_id',$villages,$memberInfo->village_id,['class'=>'form-control','placeholder'=>'-- Select Union First --','required'=>true])); ?>

                                                        </div>
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-tree" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('village_id')?$errors->first('village_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Blood Group <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group" >
                                                        <?php echo e(Form::select('blood_group_id',$bloodGroups,$memberInfo->blood_group_id,['class'=>'form-control','placeholder'=>'-- Please Blood Group --','required'=>true])); ?>


                                                        <div class="input-group-addon">
                                                            <i class="fa fa-tint blood" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('blood_group_id')?$errors->first('blood_group_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Date of birth <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::text('birthdate',$value=date('d-m-Y',strtotime($memberInfo->birthdate)),['autocomplete'=>'off','class'=>'form-control datepicker','required'=>true])); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('firthdate')?$errors->first('firthdate'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Facebook Id</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::text('facebook_id',$value=$memberInfo->facebook_id,['class'=>'form-control','placeholder'=>'Your facebook id','required'=>false])); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('facebook_id')?$errors->first('facebook_id'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Contact No: <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::number('phone_number',$value=$memberInfo->userData->phone_number,['class'=>'form-control','min'=>0,'required'=>true,'placeholder'=>'Your phone_number number (you can use for login)','required'=>true])); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('phone_number')?$errors->first('phone_number'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Your Email <sup class="text-danger">*</sup> </label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group">
                                                        <?php echo e(Form::email('email',$value=$memberInfo->userData->email,['class'=>'form-control','placeholder'=>'Your email (you can use for login','required'=>true])); ?>

                                                        <div class="input-group-addon">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('email')?$errors->first('email'):''); ?></span>
                                                </div>
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Register As <sup class="text-danger">*</sup></label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="input-group" >
                                                        <?php echo e(Form::select('member_type',['1'=>'Blood Donor','2'=>'I want to be a voluntary member'],$memberInfo->member_type,['id'=>'memberType','class'=>'form-control','placeholder'=>'-- Please select --','required'=>true])); ?>


                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo e($errors->has('member_type')?$errors->first('member_type'):''); ?></span>
                                                </div>
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                    <label>Choose you photo <sup class="text-danger"></sup></label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-7 col-xs-12">
                                                    <span class="text-danger"><?php echo e($errors->has('photo')?$errors->first('photo'):''); ?></span>
                                                    <?php if(file_exists($memberInfo->photo)): ?>
                                                    <label class="slide_upload"  for="memgerPhoto" >
                                                        <img id="selectedImg" src="<?php echo e(asset($memberInfo->photo)); ?>" style="border: 2px dashed #448aff;width: 120px;height: 120px" title="Member Photo">
                                                    </label>
                                                    <?php else: ?>
                                                        <label class="slide_upload"  for="memgerPhoto" >
                                                            <img id="selectedImg" src="<?php echo e(asset('images/default/photo.png')); ?>" style="border: 2px dashed #448aff;width: 120px;height: 120px" title="Member Photo">
                                                        </label>

                                                        <?php endif; ?>
                                                    <input type="file" id="memgerPhoto" name="photo" onchange="loadImg(this,this.id)" class="form-control"  accept="image/*" style="display: none">
                                                </div>

                                                <button class="default-big-btn pull-right" type="submit" value="Login"><i class="fa fa-book"></i> Save</button>

                                            </div><!--end row-->


                                            <?php echo Form::close(); ?>

                                        </div>
                                    </div> <!-- end col-->
                                </div> <!--end row-->
                                <?php else: ?>
                                <h3 class="well text-danger text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Your account is not active & waiting for approval</h3>
                            <?php endif; ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>
        function loadImg(input,selectedImg) {
            var target_image='#'+$('#'+selectedImg).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);}}
    </script>

    <script>

        $(document).on('change','#loadThana',function(){
            var id = $(this).val();
            $('#thanaUpazila').load('<?php echo e(URL::to("load-thana-by-district")); ?>/'+id);
        });

    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>