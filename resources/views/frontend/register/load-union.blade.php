@if(count($unions)>0)
{{Form::select('union_id',$unions,[],['id'=>'loadVillage','class'=>'form-control','placeholder'=>'-- Select Union --','required'=>true])}}
@else
<span class="form-control"> First select the Thana ! </span>
@endif