
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>Create Module</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    Add New Module
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-primary pull-right"> <i class="fa fa-list"></i> View All </a>
                    </div>
                </div>


                <?php echo Form::open(array('route' => 'menu.store','class'=>'form-horizontal','files'=>true)); ?>

                <div class="card-body">
                    <div class="form-group row   <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('name', ' Name', array('class' => 'col-md-3 control-label'))); ?>

                        <div class="col-md-8">
                            <?php echo e(Form::text('name','',array('class'=>'form-control','placeholder'=>'Name','required'))); ?>

                        </div>
                    </div>
                    <div class="form-group row  <?php echo e($errors->has('url') ? 'has-error' : ''); ?>">

                        <?php echo e(Form::label('url', 'URL', array('class' => 'col-md-3 control-label'))); ?>

                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <label class="input-group-text"><?php echo e(URL::to('/')); ?>/</label>
                                </span>
                                <?php echo e(Form::text('url','',array('class'=>'form-control','placeholder'=>'URL','required'))); ?>

                                <?php if($errors->has('url')): ?>
                                    <span class="help-block">
                                    <strong><?php echo e($errors->first('url')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                    
                        
                        
                            
                        
                    
                    <div class="form-group row">
                        <?php echo e(Form::label('serial_num', 'Others', array('class' => 'col-md-3 control-label'))); ?>

                        <div class="col-md-2">
                            <?php $max=$max_serial+1; ?>
                            <?php echo e(Form::number('serial_num',"$max",array('class'=>'form-control','placeholder'=>'Serial Number','max'=>"$max",'min'=>'0'))); ?>

                            <small> Serial </small>
                        </div>
                        <div class="col-md-3">
                            <?php echo e(Form::select('status', array('1' => 'Active', '2' => 'Inactive'),'1', ['class' => 'form-control'])); ?>

                            <small> Status </small>
                        </div>
                        <div class="col-md-3">
                            <?php echo e(Form::text('icon_class','', ['class' => 'form-control','placeholder'=>'Ex: fa fa-folder'])); ?>

                            <small> Icon Class </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <?php echo e(Form::label('type', 'Type', array('class' => 'col-md-3 control-label'))); ?>


                        <div class="col-md-3">
                            <?php echo e(Form::select('type', array('2' => 'Menu'),'1', ['class' => 'form-control'])); ?>

                        </div>

                    </div>



                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>