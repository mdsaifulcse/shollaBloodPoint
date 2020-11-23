<?php if(count($thanUpazilas)>0): ?>
<?php echo e(Form::select('thana_upazila_id',$thanUpazilas,[],['id'=>'loadUnion','class'=>'form-control','placeholder'=>'-- Select Thana --','required'=>false])); ?>

<?php else: ?>
<span class="form-control"> First select the District ! </span>
<?php endif; ?>