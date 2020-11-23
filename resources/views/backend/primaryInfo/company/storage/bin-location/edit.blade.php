@extends('layouts.app')
@section('breadcrumb')
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{URL::to('/')}}">
				<i class="feather icon-home"></i>
			</a>
		</li>

		<li class="breadcrumb-item">
			<a>Edit Bin Location</a>
		</li>
	</ul>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header card-info">
					<i class="fa fa-edit"></i> Edit old bin location info
					<div class="card-btn pull-right">
						<a href="{{URL::to('bin-location')}}" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
					</div>
				</div>

				{!! Form::open(array('route' =>['bin-location.update',$binLocationById->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)) !!}
				<div class="card-body">

					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3">Status :</label>
						<div class="col-md-4 col-sm-4">
							<div class="radio">
								<label>
									<input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($binLocationById->status=="1"){{"checked"}}@endif> Active
								</label>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="radio">
								<label>
									<input type="radio" name="status" id="radio-required2" value="0" @if($binLocationById->status=="0"){{"checked"}}@endif> Inactive
								</label>
							</div>
						</div>
					</div>

					<div class="form-group row  {{ $errors->has('location_name') ? 'has-error' : '' }}">
						{{Form::label('location_name', 'Name', array('class' => 'col-md-3 control-label'))}}
						<div class="col-md-8">
							{{Form::text('location_name',$value=$binLocationById->location_name,array('class'=>'form-control','placeholder'=>'Bin Location Name'))}}
							@if ($errors->has('location_name'))
								<span class="help-block">
                            <strong>{{ $errors->first('location_name') }}</strong>
                        </span>
							@endif
						</div>
					</div>
					<div class="form-group row  {{ $errors->has('details') ? 'has-error' : '' }}">
						{{Form::label('details', 'Details', array('class' => 'col-md-3 control-label'))}}
						<div class="col-md-8">
							{{Form::textarea('details',$value=$binLocationById->details,array('class'=>'form-control','rows'=>5,'placeholder'=>'Bin Location Details'))}}
							@if ($errors->has('details'))
								<span class="help-block">
                            <strong>{{ $errors->first('details') }}</strong>
                        </span>
							@endif
						</div>
					</div>


					<div class="form-group row">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<button type="submit" class="btn btn-warning">Update</button>
						</div>
					</div>
				</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>

@endsection




