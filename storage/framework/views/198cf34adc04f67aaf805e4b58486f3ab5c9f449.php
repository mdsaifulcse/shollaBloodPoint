
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('register-member')); ?>">Edit Member</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    <i class="fa fa-edit"></i> Edit Member Info
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(URL::to('approve-member')); ?>" title="View All Waiting member" class="btn btn-warning btn-sm" > <i class="fa fa-list"></i> Waiting Members </a>
                        <a href="<?php echo e(URL::to('member-register')); ?>" title="View All Members" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> All Members</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-10  col-md-10  com-sm-12">
                            <h4><u><?php echo e($member->name); ?></u> - Total blood donation : <strong class="badge"><?php echo e($numberOfDonation); ?></strong> times</h4>
                            <table class="table table-hover table-border-style table-bordered table-striped">
                                <tr>
                                    <td>Member Photo</td>
                                    <td>
                                        <?php if(!empty($member->photo)): ?>
                                            <img src="<?php echo e(asset($member->photo)); ?>" title="Member photo" width="80" height="70">
                                            <?php else: ?>
                                            <span> No Image</span>
                                            <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo e($member->name); ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><?php echo e($member->gender); ?></td>
                                </tr>
                                <tr>
                                    <td>Father Name</td>
                                    <td><?php echo e($member->father_name); ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td><?php echo e($member->phone_number); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo e($member->email); ?></td>
                                </tr>
                                <tr>
                                <td>Member Type</td>
                                    <td>
                                        <?php if($member->member_type==1): ?>
                                            <span class="btn btn-info btn-sm">Donate Blood</span>
                                        <?php elseif($member->member_type==2): ?>
                                            <span class="btn btn-info btn-sm">A Voluntary Member</span>
                                            <?php elseif($member->member_type==3): ?>
                                            <span class="btn btn-success btn-sm">Founder Member</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blood Group</td>
                                    <td><?php echo e($member->memberBloodGroup->name); ?></td>
                                </tr>
                                <tr>
                                    <td><span class="text-danger">Last Date of Blood Donation</span></td>
                                    <td class="text-danger"><span><?php echo e(date("F jS, Y",strtotime($member->last_blood_donation))); ?>(<?php echo e($member->last_blood_donation->diffForHumans()); ?>)</span></td>
                                </tr>
                                <tr>
                                    <td>Donation Status</td>
                                    <td>
                                        <?php if($member->donation_status==1): ?>
                                            <span class="">Donate Blood</span>
                                        <?php else: ?>
                                            <span class="">If Urgent, I can donate Blood</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td><?php echo e(date("F jS, Y",strtotime($member->birthdate))); ?></td>
                                </tr>
                                <tr class="bg-info">
                                    <td>Address</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>District </td>
                                    <td><?php echo e($member->memberDistrict->district); ?> </td>
                                </tr>
                                <tr>
                                    <td>Thana / Upazila </td>
                                    <td><?php echo e($member->memberThanaUpazila->thana_upazila); ?> </td>
                                </tr>
                                <tr>
                                    <td>Union </td>
                                    <td><?php echo e($member->memberUnion->union); ?> </td>
                                </tr>
                                <tr>
                                    <td>Village</td>
                                    <td><?php echo e($member->memberVillage->village); ?> </td>
                                </tr>
                                <tr>
                                    <td>Facebook ID</td>
                                    <td><?php echo e($member->facebook_id); ?> </td>
                                </tr>
                                <tr>
                                    <td>Member Status</td>
                                    <td>
                                        <?php if($member->status==1): ?>
                                            <span class="btn btn-success btn-sm">Active</span>
                                        <?php else: ?>
                                            <span class="btn btn-danger btn-sm">Inactive</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </div><!--end col-->
                    </div>
                </div><!--  card-body -->
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).on('change','#loadThana',function(){
            var id = $(this).val();
            console.log(id)
            $('#thanaUpazila').load('<?php echo e(URL::to("load-thana")); ?>/'+id);
        });
        $('#loadBranches')
    </script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>