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
                            <a  href="<?php echo e(URL::to('/gallery/create')); ?>" class="btn btn-primary btn-sm" title="Add new photo gallery" > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Photo Gallery List</h4>
                    </div>
                    <div class="card-body">
                        <!--  -->
                        <div class="view_branch_set  table-responsive">

                            <?php if(count($photos)>0): ?>
                                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                    <tr>
                                        <th width="1%;">Sl</th>
                                        <th width="3%;">Title</th>
                                        <th width="1.5%;">Date</th>
                                        <th width="2%;">Link</th>
                                        <th width="1%;">Status</th>
                                        <th width="1%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>

                                    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo e($i++); ?></td>
                                            <td><?php echo e($photo->title); ?></td>
                                            <td><?php echo e(date('d-m-Y',strtotime($photo->event_date))); ?></td>
                                            <td><a href="<?php echo e($photo->photo_link); ?>" target="_blank"> <i class="fa fa-external-link" aria-hidden="true"></i> Photo Link</a></td>
                                            <td class="text-dark">
                                                <?php if($photo->status==1): ?>
                                                    <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                                <?php else: ?>
                                                    <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a  href="<?php echo e(URL::to('/gallery/'.$photo->id.'/edit')); ?>" class="btn btn-warning btn-xs" title="Click here to edit this" > <i class="fa fa-edit"></i></a>
                                            <!-- delete section -->
                                                
                                                
                                                
                                            <!-- delete section end -->
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <h2 class="text-danger text-center"> No data available here. </h2>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php echo e($photos->render()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>