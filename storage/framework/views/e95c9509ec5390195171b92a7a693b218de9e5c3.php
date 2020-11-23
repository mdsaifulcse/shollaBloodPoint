
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('pages')); ?>">Pages</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    Create new Pages
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(URL::to('pages')); ?>" title="View All Pages" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
                    </div>
                </div>

                <?php echo Form::open(array('route' =>'pages.store','method'=>'POST','class'=>'form-horizontals','files'=>true)); ?>

                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <label>Page Title</label>
                            <div class="">
                                <?php echo e(Form::text('title',$value=old('title'),['class'=>'form-control','required'=>true])); ?>

                                <span class="text-danger">
                                    <?php echo e($errors->has('title')?$errors->first('title'):''); ?>

                                    </span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Status</label>
                            <div class="">
                                <?php echo e(Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])); ?>

                            </div>
                            <span class="text-danger">
                                    <?php echo e($errors->has('status')?$errors->first('status'):''); ?>

                                </span>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Serial No:</label>
                            <div class="">
                                <?php echo e(Form::number('serial_num',$value=$maxNum+1,['min'=>1,'max'=>$maxNum+1,'class'=>'form-control','required'=>true])); ?>

                            </div>
                            <span class="text-danger">
                                    <?php echo e($errors->has('status')?$errors->first('status'):''); ?>

                                </span>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Short Description</label>
                            <div class="">
                                <?php echo e(Form::textarea('short_description',$value=old('short_description'),['class'=>'form-control tinymce','placeholder'=>'Very Short Description, within 130 character','required'=>false,'rows'=>1])); ?>

                                <span class="text-danger">
                                <?php echo e($errors->has('short_description')?$errors->first('short_description'):''); ?>

                                </span>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Details</label>
                            <div class="">
                                <?php echo e(Form::textarea('details',$value=old('details'),['class'=>'form-control tinymce','placeholder'=>'Details about our page','required'=>false,'rows'=>8])); ?>

                                <span class="text-danger">
                                <?php echo e($errors->has('details')?$errors->first('details'):''); ?>

                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <label>Select Page Image</label>
                        <div class="">
                            <label class="slide_upload"  for="pageImage">
                                <img id="selectedImg" src="<?php echo e(asset('images/default/photo.png')); ?>" width="150" height="120" title="Page Image">
                            </label>
                            <input type="file" id="pageImage" name="photo" onchange="loadImg(this,this.id)" class="form-control" accept="image/*" style="display: none">
                        </div>
                        <span class="text-danger"><?php echo e($errors->has('photo')?$errors->first('photo'):''); ?></span>
                    </div>
                    <!--  End Contact Information -->
                    <div class="form-group row">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-folder"></i> Save</button>
                        </div>
                    </div>
                </div><!--  card-body -->
                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>

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
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>