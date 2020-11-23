<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('manage-slider')); ?>">
                Slider
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
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" title="Add New Category " > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Slider List</h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?php echo Form::open(array('route' => 'manage-slider.store','class'=>'form-horizontal','method'=>'POST','files'=>true)); ?>

                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Slider ( 1200 X 400 px)</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Caption <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <?php echo e(Form::text('caption',$value=old('caption'),['class'=>'form-control','placeholder'=>' Slider Caption','required'=>true])); ?>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 col-lg-5">
                                                <label class="control-label">Slider Image :</label>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <label class="slide_upload"  for="sliderImg" style="border: 2px dashed #099caf">
                                                    <img id="selectedImg" src="<?php echo e(asset('images/default/photo.png')); ?>" width="150" height="120" title="Slider Image">
                                                </label>
                                                <input type="file" id="sliderImg" name="slider_img" onchange="loadImg(this,this.id)" class="form-control" accept="image/*" style="display: none">
                                            </div>
                                            <span class="text-danger"><?php echo e($errors->has('slider_img')?$errors->first('slider_img'):''); ?></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Serial no <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <?php echo e(Form::number('serial_num',$value=$max_serial+1,['class'=>'form-control','min'=>1,'max'=>$max_serial+1,'required'=>true])); ?>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                                    </div>
                                    <?php echo Form::close();; ?>

                                </div>
                            </div>
                        </div> <!--  =================== End modal ===================  -->

                        <!--  -->
                        <div class="view_branch_set table-responsive">

                        <?php if(count($sliders)>0): ?>
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Caption</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th width="16%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $i++; ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e($slider->caption); ?></td>
                                        <td><?php if($slider->slider_img): ?>
                                                <img src="<?php echo e(asset($slider->slider_img)); ?>" width="50" height="50">
                                            <?php else: ?>
                                                <span class="text-danger">No Slider Image</span>
                                            <?php endif; ?></td>
                                        <td class="text-dark">
                                            <?php if($slider->status==1): ?>
                                                <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                            <?php else: ?>
                                                <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <!-- edit section -->
                                            <a href="#modal-dialog<?php echo $slider->id;?>" class="btn btn-xs btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <!-- #modal-dialog -->

                                            <div class="modal fade" id="modal-dialog<?php echo $slider->id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <?php echo Form::open(array('route' => ['manage-slider.update',$slider->id],'class'=>'form-horizontal','method'=>'PUT','files'=>true)); ?>

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit old Slider info ( 1200 X 400 px)</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" <?php if($slider->status=="1"): ?><?php echo e("checked"); ?><?php endif; ?>> Active
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" id="radio-required2" value="0" <?php if($slider->status=="0"): ?><?php echo e("checked"); ?><?php endif; ?>> Inactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Caption <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <?php echo e(Form::text('caption',$value=$slider->caption,['class'=>'form-control','placeholder'=>'Slider caption','required'=>true])); ?>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 col-lg-5">
                                                                    <label class="control-label">Slider Image :</label>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <input type="file" id="sliderImage<?php echo e($slider->id); ?>" name="slider_img" onchange="loadImg(this,this.id)" class="form-control" accept="image/*" style="display: none">
                                                                    <?php if($slider->slider_img): ?>
                                                                        <label class="slide_upload"  for="sliderImage<?php echo e($slider->id); ?>" style="border: 2px dashed #099caf">
                                                                            <img src="<?php echo e(asset($slider->slider_img)); ?>" width="150" height="120">
                                                                        </label>

                                                                    <?php else: ?>
                                                                        <label class="slide_upload"  for="sliderImage<?php echo e($slider->id); ?>" style="border: 2px dashed #099caf">
                                                                            <img  src="<?php echo e(asset('images/default/photo.png')); ?>" width="150" height="120" title="Page Image">
                                                                        </label>
                                                                    <?php endif; ?>

                                                                </div>
                                                                <span class="text-danger"><?php echo e($errors->has('slider_img')?$errors->first('slider_img'):''); ?></span>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <?php echo e(Form::number('serial_num',$value=$slider->serial_num,['class'=>'form-control','min'=>1,'required'=>true])); ?>

                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                                                        </div>
                                                        <?php echo Form::close();; ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end edit section -->

                                            <!-- delete section -->
                                            <?php echo e(Form::open(array('route'=>['manage-slider.destroy',$slider->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$slider->id"))); ?>

                                            <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm<?php echo e($slider->id); ?>")'><i class="fa fa-trash"></i></button>
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
                            <?php echo e($sliders->render()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function loadImg(input,image_load) {
            console.log(image_load)
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>