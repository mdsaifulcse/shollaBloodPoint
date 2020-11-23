
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('primary-info')); ?>">Login Description</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    Login Description
                    <div class="card-btn pull-right">

                    </div>
                </div>

                <?php echo Form::open(array('route' =>['primary-info.update', $data->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)); ?>

                <div class="card-body">


                    <div class="form-group  <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('description', 'Login Description', array('class' => 'col-md-12'))); ?>

                        <div class="col-md-12">
                            <?php echo e(Form::textArea('description',$data->description,array('class'=>'form-control tinymce','placeholder'=>'Login Description','rows'=>'10','id'=>'editor1'))); ?>

                            <?php if($errors->has('description')): ?>
                                <span class="help-block">
                            <strong><?php echo e($errors->first('description')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>
                    </div>



                    <?php echo e(Form::hidden('id',$data->id)); ?>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>