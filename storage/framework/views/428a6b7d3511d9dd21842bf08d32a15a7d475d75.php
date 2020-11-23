
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('gallery')); ?>">
                Photo Gallery
            </a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        <div class="card-btn pull-right">
                            <a  href="<?php echo e(URL::to('/gallery')); ?>" class="btn btn-primary btn-sm" title="Photo gallery list" > <i class="fa fa-list"></i> View all</a>

                        </div>
                        <h4 class="card-title">Add New Photo Gallery</h4>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(array('route' => 'gallery.store','class'=>'form-horizontal','method'=>'POST')); ?>

                        <div class="modal-header">

                        </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> Title <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-8 col-sm-8">
                                    <?php echo e(Form::text('title',$value=old('title'),['class'=>'form-control','placeholder'=>'Event Title','required'=>true])); ?>

                                    <span class="text-danger"><?php echo e($errors->has('title')?$errors->first('title'):''); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> Date <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-8 col-sm-8">
                                    <?php echo e(Form::text('event_date',$value=old('event_date'),['class'=>'form-control datepicker','min'=>0,'required'=>true])); ?>

                                    <span class="text-danger"><?php echo e($errors->has('event_date')?$errors->first('event_date'):''); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3"> Link <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-8 col-sm-8">
                                    <?php echo e(Form::text('photo_link',$value=old('photo_link'),['class'=>'form-control','placeholder'=>'Google Drive Link','required'=>true])); ?>

                                    <span class="text-danger"><?php echo e($errors->has('photo_link')?$errors->first('photo_link'):''); ?></span>
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                                <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                            </div>
                        </div>
                        <?php echo Form::close();; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>