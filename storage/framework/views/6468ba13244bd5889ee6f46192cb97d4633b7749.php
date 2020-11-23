<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('gallery')); ?>">
                Founder Members List
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
                            <a  href="<?php echo e(URL::to('/founder-members/create')); ?>" class="btn btn-primary btn-sm" title="Add new founder member" > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Founder Members</h4>
                    </div>
                    <div class="card-body">
                        <!--  -->
                        <div class="view_branch_set  table-responsive">

                            <?php if(count($founderMembers)>0): ?>
                                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                    <tr>
                                        <th width="1%;">Sl</th>
                                        <th width="3%;">Name</th>
                                        <th width="1.5%;">Designation</th>
                                        <th width="2%;">Blood Group</th>
                                        <th width="1%;">Photo</th>
                                        <th width="1%;">Status</th>
                                        <th width="1%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>

                                    <?php $__currentLoopData = $founderMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $founderMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo e($i++); ?></td>
                                            <td><?php echo e($founderMember->name); ?></td>
                                            <td><?php echo e($founderMember->designation); ?></td>
                                            <td><?php echo e($founderMember->fmBloodGroup->name); ?></td>
                                            <td>
                                                <?php if(!empty($founderMember->photo)): ?>
                                                    <img src="<?php echo e(asset($founderMember->photo)); ?>" width="50">
                                                <?php else: ?>
                                                    <span>No Image</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-dark">
                                                <?php if($founderMember->status==1): ?>
                                                    <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                                <?php else: ?>
                                                    <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                <?php endif; ?>
                                            </td>
                                            <td>

                                            <!-- delete section -->
                                                <?php echo e(Form::open(array('route'=>['founder-members.destroy',$founderMember->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$founderMember->id"))); ?>

                                                <a  href="<?php echo e(URL::to('/founder-members/'.$founderMember->id.'/edit')); ?>" class="btn btn-warning btn-xs" title="Click here to edit this" > <i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm<?php echo e($founderMember->id); ?>")'><i class="fa fa-trash"></i></button>
                                                <?php echo Form::close(); ?>

                                            <!-- delete section end -->
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <h2 class="text-danger text-center"> No data available here. </h2>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php echo e($founderMembers->render()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>