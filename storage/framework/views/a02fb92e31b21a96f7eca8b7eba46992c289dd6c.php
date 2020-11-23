<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>Users</a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <?php if($errors->has('email')): ?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b><?php echo e($errors->first('email')); ?></b> 
           </div>
        </div>
    <?php endif; ?>
<div id="content" class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-info">
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(URL::to('users/create')); ?>" class="btn btn-primary btn-sm" > <i class="fa fa-plus-circle"></i> Add New</a>

                    </div>
                    <h4 class="card-title">View All User </h4>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Address</th>
                                <th width="10%">Created At</th>
                                <th colspan="2" width="5%">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $i=1; ?>
                    <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                        <td><?php echo e($i++); ?></td>
                        <td> <a href="<?php echo e(route('users.show',$data->id)); ?>" class="btn btn-xs btn-link"><?php echo e($data->name); ?></a></td>
                        <td><?php echo e($data->phone_number); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td>
                            <?php if($data->type==1): ?>
                                <span class="badge badge-secondary">Super Admin</span>
                            <?php else: ?>
                                <span class="badge badge-secondary"> Admin</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($data->address); ?></td>
                        <td><?php echo e(date('d-M-Y',strtotime($data->created_at))); ?></td>
                        <td>
                            <a href="#editModal<?php echo e($data->id); ?>" title="Quick Edit" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                        <!-- Modal -->
    <div class="modal fade" id="editModal<?php echo e($data->id); ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><?php echo e($data->name); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
            <?php echo Form::open(array('route' => ['users.update',$data->id],'class'=>'form-horizontal','method'=>'PUT')); ?>

          <div class="modal-body">
            <div class="form-group row">
                <?php echo e(Form::label('name', 'Name', array('class' => 'col-md-3 control-label'))); ?>

                <div class="col-md-8">
                    <?php echo e(Form::text('name',$data->name,array('class'=>'form-control','placeholder'=>'Name','required'))); ?>

                </div>
            </div>
            <div class="form-group row">
                <?php echo e(Form::label('email', 'Email', array('class' => 'col-md-3 control-label'))); ?>

                <div class="col-md-8">
                    <?php echo e(Form::email('email',$data->email,array('class'=>'form-control','placeholder'=>'Email','required'))); ?>

                </div>
            </div>
            <div class="form-group row">
                <?php echo e(Form::label('phone_number', 'Mobile', array('class' => 'col-md-3 control-label'))); ?>

                <div class="col-md-8">
                    <?php echo e(Form::text('phone_number',$data->phone_number,array('class'=>'form-control','placeholder'=>'Mobile','required'))); ?>

                </div>
            </div>
            <div class="form-group row">
                <?php echo e(Form::label('address', 'Address', array('class' => 'col-md-3 control-label'))); ?>

                <div class="col-md-8">
                    <?php echo e(Form::text('address',$data->address,array('class'=>'form-control','placeholder'=>'Address','required'))); ?>

                </div>
            </div>
                <?php echo e(Form::hidden('id',$data->id)); ?>

                <?php echo e(Form::hidden('company_id',$data->company_id)); ?>

                <?php echo e(Form::hidden('branch_id',$data->branch_id)); ?>

                <?php echo e(Form::hidden('role_id',$data->role_id)); ?>


          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <?php echo e(Form::submit('Save changes',array('class'=>'btn btn-info'))); ?>

          </div>
            <?php echo Form::close(); ?>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

                        </td>
                        <td>
                            <?php echo e(Form::open(array('route'=>['users.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id"))); ?>

                            <a href='<?php echo e(URL::to("users/$data->id")); ?>' title="Edit User" class="btn btn-info btn-xs"> <i class="fa fa-pencil-square"></i></a>
                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm<?php echo e($data->id); ?>')"><i class="fa fa-trash"></i></button>
                    <?php echo Form::close(); ?>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                       
                        </tbody>
                    </table>
                    <div class="pull-right">
                    <?php echo e($allUsers->render()); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('public/plugins/jquery/jquery-1.9.1.min.js')); ?>"></script>
<script type="text/javascript">
      $(document).ready(function() {
          App.init();
          DashboardV2.init();
          //
      });
    </script>
                
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>