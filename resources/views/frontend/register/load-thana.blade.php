@if(count($thanUpazilas)>0)
{{Form::select('thana_upazila_id',$thanUpazilas,[],['id'=>'loadUnion','class'=>'form-control','placeholder'=>'-- Select Thana --','required'=>false])}}
@else
<span class="form-control"> First select the District ! </span>
@endif