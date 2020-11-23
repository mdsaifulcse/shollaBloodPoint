
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('primary-info')); ?>">Organization Info</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    Organization Info
                </div>

                <div class="card-body">
                    <?php echo Form::open(array('route' =>['primary-info.update', $data->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)); ?>


                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="form-group col-md-6 no-padding <?php echo e($errors->has('company_name') ? 'has-error' : ''); ?>">
                                    <?php echo e(Form::label('company_name', 'Name of Organization', array('class' => 'col-md-12'))); ?>

                                    <div class="col-md-12">
                                        <?php echo e(Form::text('company_name',$data->company_name,array('class'=>'form-control','placeholder'=>'Name of Organization'))); ?>

                                        <?php if($errors->has('company_name')): ?>
                                            <span class="help-block">
                            <strong><?php echo e($errors->first('company_name')); ?></strong>
                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group  col-md-6 no-padding <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                                    <?php echo e(Form::label('address', 'Organization Address', array('class' => 'col-md-12'))); ?>

                                    <div class="col-md-12">
                                        <?php echo e(Form::text('address',$data->address,array('class'=>'form-control','placeholder'=>'Organization Address'))); ?>

                                        <?php if($errors->has('address')): ?>
                                            <span class="help-block">
                            <strong><?php echo e($errors->first('address')); ?></strong>
                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 no-padding  <?php echo e($errors->has('mobile_no') ? 'has-error' : ''); ?>">
                                    <?php echo e(Form::label('mobile_no', 'Contact Number', array('class' => 'col-md-12'))); ?>

                                    <div class="col-md-12">
                                        <?php echo e(Form::text('mobile_no',$data->mobile_no,array('class'=>'form-control','placeholder'=>'Contact Number'))); ?>

                                        <?php if($errors->has('mobile_no')): ?>
                                            <span class="help-block">
                            <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 no-padding  <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                    <?php echo e(Form::label('email', 'Email', array('class' => 'col-md-12'))); ?>

                                    <div class="col-md-12">
                                        <?php echo e(Form::email('email',$data->email,array('class'=>'form-control','placeholder'=>'Email'))); ?>

                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding ">
                            <div class="row">
                                <div class="form-group  col-md-8 no-padding <?php echo e($errors->has('logo') ? 'has-error' : ''); ?>">
                                    <?php echo e(Form::label('logo', 'Organization Logo', array('class' => 'col-md-12'))); ?>

                                    <div class="col-md-12">
                                        <label class="upload_photo upload client_logo_upload" for="file">
                                            <!--  -->
                                            <img src="<?php echo e(asset($data->logo)); ?>" id="image_load">
                                            <i class="upload_hover ion ion-ios-camera-outline"></i>
                                        </label>
                                        <?php echo e(Form::file('logo',array('id'=>'file','style'=>'display:none','onchange'=>'loadPhoto(this,"image_load")'))); ?>

                                        <?php if($errors->has('logo')): ?>
                                            <span class="help-block" style="display:block">
                            <strong><?php echo e($errors->first('logo')); ?></strong>
                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 no-padding <?php echo e($errors->has('favicon') ? 'has-error' : ''); ?>">
                                    <?php echo e(Form::label('favicon', ' Icon', array('class' => 'col-md-12'))); ?>

                                    <div class="col-md-12">
                                        <label class="upload_photo upload client_favicon_upload" for="file2">
                                            <!--  -->
                                            <img src="<?php echo e(asset($data->favicon)); ?>" id="image_load2">
                                            <i class="upload_hover ion ion-ios-camera-outline"></i>
                                        </label>
                                        <?php echo e(Form::file('favicon',array('id'=>'file2','style'=>'display:none','onchange'=>'loadPhoto(this,"image_load2")'))); ?>

                                        <?php if($errors->has('favicon')): ?>
                                            <span class="help-block" style="display:block">
                            <strong><?php echo e($errors->first('favicon')); ?></strong>
                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <label>Short description</label>
                            <div class="">
                                <textarea name="short_description" rows="5" class="form-control tinymce" placeholder="Short description about organization"><?php echo e($data->short_description); ?></textarea>
                                <span class="text-danger">
                                <?php echo e($errors->has('short_description')?$errors->first('short_description'):''); ?>

                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <label>Description	more</label>
                            <div class="">
                                <textarea name="description" rows="8" class="form-control tinymce" placeholder="Details Short description about organization"><?php echo e($data->description); ?></textarea>
                                <span class="text-danger">
                                <?php echo e($errors->has('description')?$errors->first('description'):''); ?>

                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="form-group row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <label>Write basic works by comma (,) separated</label>
                            <div class="">
                                <?php echo e(Form::text('company_tag',$value=$data->company_tag,['class'=>'form-control','placeholder'=>'Organization tags','required'=>true])); ?>

                                <span class="text-danger">
                                <?php echo e($errors->has('company_tag')?$errors->first('company_tag'):''); ?>

                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                        <?php echo e(Form::hidden('id',$data->id)); ?>


                        <div class="form-group col-md-12 no-padding">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                    </div>

                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>