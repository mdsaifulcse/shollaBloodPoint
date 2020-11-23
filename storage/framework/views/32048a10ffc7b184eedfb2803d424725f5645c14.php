<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('blood-bank')); ?>"> Blook Bank</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Blood Banks
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('blood-bank.create')); ?>" title="Add new blook bank" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                <?php if(count($bloodBanks)>0): ?>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            <?php $__currentLoopData = $bloodBanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bloodBank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($bloodBank->name); ?></td>
                                    <td><?php echo e($bloodBank->contact); ?></td>
                                    <td><?php echo e($bloodBank->address); ?></td>
                                    <td><?php echo e($bloodBank->district); ?></td>
                                    <td><i class="<?php echo e(($bloodBank->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle text-danger'); ?>"></i></td>

                                    <td>
                                        <?php echo Form::open(array('route' => ['blood-bank.destroy',$bloodBank->id],'method'=>'DELETE','id'=>"deleteForm$bloodBank->id")); ?>

                                        <a href="<?php echo e(route('blood-bank.edit',$bloodBank->id)); ?>" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                        <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm<?php echo e($bloodBank->id); ?>")'><i class="fa fa-trash"></i></button>
                                        <?php echo Form::close(); ?>

                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        <?php echo e($bloodBanks->render()); ?>

                    </div>
                <?php else: ?>
                    <h2 class="text-danger text-center"> No data available here. </h2>
                <?php endif; ?>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>