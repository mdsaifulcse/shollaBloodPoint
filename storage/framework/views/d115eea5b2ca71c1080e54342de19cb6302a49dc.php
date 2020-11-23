<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('notice')); ?>"> Notice</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Notices
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('notice.create')); ?>" title="Add new notice" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                <?php if(count($notices)>0): ?>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($notice->title); ?></td>
                                    <td>
                                        <?php if(!empty($notice->photo)): ?>
                                        <img src="<?php echo e(asset($notice->photo)); ?>" width="80" height="80">
                                            <?php else: ?>
                                            <span class="text-danger">No Image</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><i class="<?php echo e(($notice->status==1)? 'fa fa-check-circle text-success' : 'fa fa-times-circle text-danger'); ?>"></i></td>

                                    <td><?php echo e(date('d-m-Y', strtotime($notice->created_at))); ?></td>
                                    <td>
                                        <?php echo Form::open(array('route' => ['notice.destroy',$notice->id],'method'=>'DELETE','id'=>"deleteForm$notice->id")); ?>

                                        <a href="<?php echo e(route('notice.edit',$notice->id)); ?>" class="btn btn-xs btn-info"> <i class="fa fa-edit"></i> </a>
                                        <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm<?php echo e($notice->id); ?>")'><i class="fa fa-trash"></i></button>
                                        <?php echo Form::close(); ?>

                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        <?php echo e($notices->render()); ?>

                    </div>
                <?php else: ?>
                    <h2 class="text-danger text-center"> No data available here. </h2>
                <?php endif; ?>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>