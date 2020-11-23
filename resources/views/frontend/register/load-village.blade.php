@if(count($villages)>0)
{{Form::select('village_id',$villages,[],['class'=>'form-control','placeholder'=>'-- Select Village --','required'=>true])}}
@else
<span class="form-control"> First select the Union ! </span>
@endif