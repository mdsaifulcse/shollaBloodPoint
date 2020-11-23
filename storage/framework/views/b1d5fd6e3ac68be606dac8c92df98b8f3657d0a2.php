
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('gallery')); ?>">
                Find Best Donor of the year
            </a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <style>
        .find-best-donors{
            background-color: #d4d4d4;
            padding: 10px 0;
            padding-bottom: 1px;
        }
    </style>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        <div class="card-btn pull-right">
                            

                        </div>
                        <h4 class="card-title">Find Best Donor of the year</h4>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(array('url' => 'donors-by-year','class'=>'form-horizontal find-best-donors','method'=>'GET')); ?>


                            <div class="row form-group">

                                <label class="control-label col-md-1"> Year <sup class="text-danger">*</sup> :</label>
                                <div class=" col-md-2">
                                    <?php echo e(Form::text('donation_year',$value=$request->donation_year,['class'=>'form-control datepicker','placeholder'=>'Select Year','required'=>true])); ?>

                                    <span class="text-danger"><?php echo e($errors->has('donation_year')?$errors->first('donation_year'):''); ?></span>
                                </div>




                                <label class="control-label col-md-2"> Number of donors <sup class="text-danger">*</sup> :</label>
                                <div class="col-md-2">
                                    <?php echo e(Form::number('number_of_donors',$value=$request->number_of_donors,['class'=>'form-control input-sm','min'=>0,'required'=>true])); ?>

                                    <span class="text-danger"><?php echo e($errors->has('number_of_donors')?$errors->first('number_of_donors'):''); ?></span>
                                </div>

                                <label class="control-label"> &nbsp;</label>
                                <div class="col-md-3 col-sm-3 ">
                                    <button type="submit" class="btn btn-sm btn-success">Find Best Donor</button>
                                </div>

                            </div>

                        <?php echo Form::close();; ?>


                        <?php if(count($donorOfYear)>0): ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr class="text-center">
                                    <th width="3%">Sl</th>
                                    <th width="10%">Number Of Donation</th>
                                    <th width="20%">Name</th>
                                    <th width="15%">Mobile</th>
                                    <th width="10%"> Last Donation Data</th>
                                    <th width="10%">Photo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1?>
                                <?php $__currentLoopData = $donorOfYear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestDonor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($bestDonor->maxDonation); ?></td>
                                    <td><?php echo e($bestDonor->name); ?> </td>
                                    <td><?php echo e($bestDonor->phone_number); ?> </td>
                                    <td><?php echo e(date('d M Y',strtotime($bestDonor->last_blood_donation))); ?> </td>
                                    <td>
                                        <?php if(!empty($bestDonor->photo)): ?>
                                            <img src="<?php echo e(asset($bestDonor->photo)); ?>" title="Donor photo" width="60">
                                        <?php else: ?>
                                            <span>No Image</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function loadImg(input,selectedImg) {
            var target_image='#'+$('#'+selectedImg).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);}}
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>