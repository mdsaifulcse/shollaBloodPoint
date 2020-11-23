@extends('layouts.app')
@section('breadcrumb')
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{URL::to('/')}}">
				<i class="feather icon-home"></i>
			</a>
		</li>

		<li class="breadcrumb-item">
			<a>Password Change</a>
		</li>
	</ul>
@endsection
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header card-info">
					Password Change of {{$data->name}}
					<div class="card-btn pull-right">
						<a href="{{URL::to('users')}}" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
					</div>
				</div>
				<div class="card-block">
					<div class="j-wrapper j-wrapper-640">
						{!! Form::open(['route'=>'password','method'=>'POST','class'=>'j-pro','id'=>'j-pro']) !!}
						<div class="j-content">

							<!-- end name -->
							<!-- start email phone -->
							<div class="j-row">
								<div class="j-span6 j-unit  {{ $errors->has('password') ? 'has-error' : '' }}">
									<label class="j-label">New password</label>
									<div class="j-input">
										<label class="j-icon-right" for="email">
											<i class="icofont icofont-ui-password"></i>
										</label>
										<input type="password" required id="email" name="password">
										<span class="j-tooltip j-tooltip-right-top">New password</span>
										@if ($errors->has('password'))
											<span class="help-block">
                                                    <small>{{ $errors->first('password') }}</small>
                                                </span>
										@endif
									</div>
								</div>
								<div class="j-span6 j-unit">
									<label class="j-label">Confirm Password</label>
									<div class="j-input">
										<label class="j-icon-right" for="phone">
											<i class="icofont icofont-ui-password"></i>
										</label>
										<input type="password" required id="phone" name="password_confirmation">
										<span class="j-tooltip j-tooltip-right-top">Confirm Password</span>
									</div>
								</div>
							</div>
						</div>
					{{Form::hidden('id',$data->id)}}
						<!-- end /.content -->
						<div class="j-footer">
							<a class="btn btn-warning" href="{{route('users.show',$data->id)}}"> Profile Update </a>
							<button type="submit" class="btn btn-primary">Change</button>
						</div>
						<!-- end /.footer -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

