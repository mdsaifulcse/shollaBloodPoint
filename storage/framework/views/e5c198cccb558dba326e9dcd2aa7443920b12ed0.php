
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('menu')); ?>">Module</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Module
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('menu.create')); ?>" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Add new </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Sub Menu</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><a href="<?php echo e(route('menu.edit',$data->id)); ?>"><?php echo e($data->name); ?></a></td>
                                <td><a href="<?php echo e(URL::to($data->url)); ?>" target="_blank"><?php echo e(URL::to($data->url)); ?></a></td>
                                <td><a href="<?php echo e(URL::to('sub-menu',$data->id)); ?>" class="label label-primary" style="color: #fff;">Sub Menu</a></td>
                                <td><i class="<?php echo e(($data->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle'); ?>"></i></td>

                                <td><?php echo e($data->created_at); ?></td>
                                <td>
                                    <?php echo Form::open(array('route' => ['menu.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id")); ?>

                                    <a href="<?php echo e(route('menu.edit',$data->id)); ?>" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                    <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm<?php echo e($data->id); ?>")'><i class="fa fa-trash"></i></button>
                                    <?php echo Form::close(); ?>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                    <?php echo e($allData->render()); ?>

                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>