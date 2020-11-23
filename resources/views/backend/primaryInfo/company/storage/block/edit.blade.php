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
					<i class="fa fa-edit"></i> Edit old storage block info
					<div class="card-btn pull-right">
						<a href="{{URL::to('storage-block')}}" title="View All Block of Storage" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
					</div>
				</div>

				{!! Form::open(array('route' =>['storage-block.update',$getStorageBlock->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)) !!}
				<div class="card-body">

					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3">Status :</label>
						<div class="col-md-4 col-sm-4">
							<div class="radio">
								<label>
									<input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($getStorageBlock->status=="1"){{"checked"}}@endif> Active
								</label>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="radio">
								<label>
									<input type="radio" name="status" id="radio-required2" value="0" @if($getStorageBlock->status=="0"){{"checked"}}@endif> Inactive
								</label>
							</div>
						</div>
					</div>


				@if(!empty($storages))
						<div class="form-group row  {{ $errors->has('storage_id') ? 'has-error' : '' }}">
							{{Form::label('storage_id', 'Storage', array('class' => 'col-md-3 control-label'))}}
							<div class="col-md-8">
								{{Form::select('storage_id',$storages,$getStorageBlock->storage_id,array('class'=>'form-control','required'=>true,'placeholder'=>'Select Storage'))}}
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
							{{Form::text('block_name',$value=$getStorageBlock->block_name,array('class'=>'form-control','placeholder'=>'Block/Self Name'))}}
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
							{{Form::textarea('details',$value=$getStorageBlock->details,array('class'=>'form-control','rows'=>5,'placeholder'=>'Details about this'))}}
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
							<?php
                            $value=$getStorageBlock->selfOfBlocks->pluck('self_of_block')->toArray();
                            $value = implode(',',$value);

							?>
							{{Form::text('self_of_block',$value,array('class'=>'form-control tagit','placeholder'=>'Self Name/number'))}}
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
							<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure, Everything is ok?')">Update</button>
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
                triggerKeys:['enter', 'comma', 'tab']
            });
        });
	</script>
@endsection




