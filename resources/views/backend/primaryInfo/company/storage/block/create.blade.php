@extends('layouts.app')
@section('breadcrumb')
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{URL::to('/')}}">
				<i class="feather icon-home"></i>
			</a>
		</li>

		<li class="breadcrumb-item">
			<a> Storage Block</a>
		</li>
	</ul>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header card-info">
					Create new storage block
					<div class="card-btn pull-right">
						<a href="{{URL::to('storage-block')}}" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
					</div>
				</div>

				{!! Form::open(array('route' =>'storage-block.store','method'=>'POST','class'=>'form-horizontal','files'=>true)) !!}
				<div class="card-body">

					@if(!empty($storages))
					<div class="form-group row  {{ $errors->has('storage_id') ? 'has-error' : '' }}">
						{{Form::label('storage_id', 'Storage', array('class' => 'col-md-3 control-label'))}}
						<div class="col-md-8">
							{{Form::select('storage_id',$storages,[],array('class'=>'form-control','required'=>true,'placeholder'=>'Select Storage'))}}
							@if ($errors->has('storage_id'))
								<span class="help-block">
                            <strong>{{ $errors->first('storage_id') }}</strong>
                        </span>
							@endif
						</div>
					</div>
					@endif

					<div class="form-group row  {{ $errors->has('block_name') ? 'has-error' : '' }}">
						{{Form::label('block_name', 'Block Name *', array('class' => 'col-md-3 control-label'))}}
						<div class="col-md-8">
							{{Form::text('block_name',$value=old('block_name'),array('class'=>'form-control','placeholder'=>'Block/Self Name'))}}
							@if ($errors->has('block_name'))
								<span class="help-block">
                            <strong>{{ $errors->first('block_name') }}</strong>
                        </span>
							@endif
						</div>
					</div>
					<div class="form-group row  {{ $errors->has('details') ? 'has-error' : '' }}">
						{{Form::label('details', 'Details', array('class' => 'col-md-3 control-label'))}}
						<div class="col-md-8">
							{{Form::textarea('details',$value=old('details'),array('class'=>'form-control','rows'=>5,'placeholder'=>'Details about this'))}}
							@if ($errors->has('details'))
								<span class="help-block">
                            <strong>{{ $errors->first('details') }}</strong>
                        </span>
							@endif
						</div>
					</div>

						<div class="form-group row  {{ $errors->has('self_of_block') ? 'has-error' : '' }}">
							{{Form::label('self_of_block', 'Self Name/Number', array('class' => 'col-md-3 control-label'))}}
							<div class="col-md-8">
								{{Form::text('self_of_block',$value=old('self_of_block'),array('class'=>'form-control tagit','placeholder'=>'Self Name/number'))}}
								@if ($errors->has('self_of_block'))
									<span class="help-block">
                            <strong>{{ $errors->first('self_of_block') }}</strong>
                        </span>
								@endif
							</div>
						</div>

					<div class="form-group row">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
        $(document).ready(function() {
            $(".tagit").tagit({
                unique: true,
			});
        });
	</script>
	@endsection




