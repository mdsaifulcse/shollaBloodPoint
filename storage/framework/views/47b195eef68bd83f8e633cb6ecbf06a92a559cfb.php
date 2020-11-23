<?php if(count($villages)>0): ?>
<?php echo e(Form::select('village_id',$villages,[],['class'=>'form-control','placeholder'=>'-- Select Village --','required'=>true])); ?>

<?php else: ?>
<span class="form-control"> First select the Union ! </span>
<?php endif; ?>