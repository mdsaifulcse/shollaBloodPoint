
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('member-register')); ?>"> Member Registration</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    New member waiting for approval
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('member-register.create')); ?>" title="Add new member" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table  class="table table-striped table-hover table-bordered center_table">
                            <?php if(count($newMembers)>0): ?>
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Blood Group</th>
                                <th>Member Type </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=1?>
                                <?php $__currentLoopData = $newMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($newMember->userData->name); ?></td>
                                <td><?php echo e($newMember->userData->phone_number); ?></td>
                                <td><?php echo e($newMember->userData->email); ?></td>
                                <td><?php echo e($newMember->memberBloodGroup->name); ?></td>
                                <td>
                                <?php if($newMember->member_type==1): ?>
                                    <span class="text-success">Blood Donor </span>
                                    <?php else: ?>
                                        <span class="text-success">I want to be a voluntary member </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo Form::open(array('route' => ['member-register.destroy',$newMember->id],'method'=>'DELETE','id'=>"deleteForm$newMember->id")); ?>

                                    <a href="<?php echo e(url('member-register/'.$newMember->id)); ?>" class="btn btn-xs btn-info" title="Click here to view all info about this member"> <i class="fa fa-eye"></i> </a>
                                    <a href="<?php echo e(url('approve-new-member/'.$newMember->id)); ?>" class="btn btn-xs btn-success" title="Click here to approve this member" onclick="return confirm('Are you sure to approve this member ?')"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </a>
                                    <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm<?php echo e($newMember->id); ?>")'><i class="fa fa-trash"></i></button>
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <h3 class="text-center text-danger">No new member request available here</h3>
                            <?php endif; ?>

                            </tbody>
                        </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>