@if(count($branches)>0)
{{Form::select('branch_id',$branches,'',['class'=>'form-control select','placeholder'=>'-Select Branch-'])}}
@else
    <span class="form-control"> First select the company ! </span>
@endif