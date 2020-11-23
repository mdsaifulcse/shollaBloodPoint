<?php if(count($unions)>0): ?>
<?php echo e(Form::select('union_id',$unions,[],['id'=>'loadVillage','class'=>'form-control','placeholder'=>'-- Select Union --','required'=>true])); ?>

<?php else: ?>
<span class="form-control"> First select the Thana ! </span>
<?php endif; ?>