
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('member-register')); ?>"> All Volunteers Member Lists</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    All Volunteers Member Lists
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('member-register.create')); ?>" title="Add new member" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus-circle"></i> Add new </a>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="allMembers" class="table table-striped table-hover table-bordered center_table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Blood Group</th>
                                <th>Last Donation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(function() {
        $('#allMembers').DataTable( {
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: '<?php echo e(url('/all-volunteers-show')); ?>',
            columns: [
                { data: 'id',name:'id'},
                { data: 'name',name:'users.name'},
                { data: 'phone_number',name:'users.phone_number'},
                { data: 'email',name:'users.email'},
                { data: 'blood_group',name:'blood_groups.name'},
                { data: 'last_blood_donation',name:'members.last_blood_donation'},
                { data: 'action'}
            ]
        });

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>