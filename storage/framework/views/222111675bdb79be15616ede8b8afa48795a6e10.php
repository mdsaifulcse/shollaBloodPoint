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
                <?php if(count($messages)>0): ?>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Contact</th>
                                <th>Subject</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($message->name); ?></td>
                                    <td><?php echo e($message->mobile); ?></td>
                                    <td><?php echo e($message->email); ?></td>
                                    <td><?php echo e($message->subject); ?></td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal<?php echo e($message->id); ?>" class="btn btn-xs btn-info"> <i class="fa fa-eye"></i> </a>
                                        <!-- Modal -->
                                        <div id="myModal<?php echo e($message->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><i class="fa fa-tint text-danger"></i> <?php echo e($message->subject); ?></h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover table-striped">
                                                                <tr>
                                                                    <td>Name</td>
                                                                    <td><?php echo e($message->name); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Info</td>
                                                                    <td><?php echo e($message->mobile); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td><?php echo e($message->email); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Message</td>
                                                                    <td>
                                                                        <?php echo e($message->message); ?>

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        <?php echo Form::open(array('url' =>'delete-user-message','method'=>'POST','id'=>"deleteForm$message->id")); ?>

                                        <input type="hidden" name="id" value="<?php echo e($message->id); ?>" >
                                        <button type="button" class="btn btn-xs btn-danger" onclick='return deleteConfirm("deleteForm<?php echo e($message->id); ?>")'><i class="fa fa-trash"></i></button>
                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        <?php echo e($messages->render()); ?>

                    </div>
                <?php else: ?>
                    <h2 class="text-danger text-center"> No data available here. </h2>
                <?php endif; ?>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>