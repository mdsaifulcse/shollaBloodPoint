@extends('layouts.app')
@section('breadcrumb')
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{URL::to('/')}}">
				<i class="feather icon-home"></i>
			</a>
		</li>

		<li class="breadcrumb-item">
			<a>All Bin Location</a>
		</li>
	</ul>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header card-info">
					All Bin Location
					<div class="card-btn pull-right">
						<a href="{{URL::to('bin-location/create')}}" title="Create New Bin Location" class="btn btn-primary btn-sm" > <i class="fa fa-plus-circle"></i> Add New</a>

					</div>
				</div>
				<div class="card-body">
					@if(count($binLocations)>0)
						<div class="table-responsive">


							<table class="table  table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th>Sl</th>
									<th>Location Name</th>
									<th>Details</th>
									<th>Status</th>
									<th width="16%;">Action</th>
								</tr>
								</thead>
								<tbody>
                                <?php $i=0; ?>
								@foreach($binLocations as $binLocation)
                                    <?php $i++; ?>
									<tr>
										<td>{{$i++}}</td>
										<td>{{$binLocation->location_name}}</td>
										<td>{{$binLocation->details}}</td>
										<td class="text-dark">
											@if($binLocation->status==1)
												<a title="Active"><i class="fa fa-check-circle-o fa-2x text-primary"></i></a>
											@else
												<a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
												@endif
										</td>
										<td style="text-align: center">
											{{Form::open(array('route'=>['bin-location.destroy',$binLocation->id],'method'=>'DELETE','id'=>"deleteForm$binLocation->id"))}}
											<a href='{{URL::to("bin-location/$binLocation->id/edit")}}' class="btn btn-info btn-xs"> <i class="fa fa-pencil-square"></i></a>
											<button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$binLocation->id}}')"><i class="fa fa-trash"></i></button>
											{!! Form::close() !!}

										</td>
									</tr>
								@endforeach
								</tbody>

							</table>
						</div>
					@else
						<h2 class="text-danger text-center"> No data available here. </h2>
					@endif
				</div>
			{{$binLocations->render()}}
			<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col-lg-12 -->
	</div>



@endsection


