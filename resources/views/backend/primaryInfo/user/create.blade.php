@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>User Registration</a>
        </li>
    </ul>
@endsection
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-info">
                    User (Admin) Registration
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('users')}}" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="j-wrapper j-wrapper-640">
                        {!! Form::open(['route'=>'users.store','method'=>'POST','class'=>'j-pro','id'=>'j-pro']) !!}
                        <div class="j-content">
                            <!-- start name -->
                            <div class="j-unit">
                                <label class="j-label">Your name</label>
                                <div class="j-input {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label class="j-icon-right" for="name">
                                        <i class="icofont icofont-ui-user"></i>
                                    </label>
                                    <input type="text" required id="name" name="name">
                                    <span class="j-tooltip j-tooltip-right-top">Your Full Name</span>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <small>{{ $errors->first('name') }}</small>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!-- end name -->
                            <!-- start email phone -->
                            <div class="j-row">
                                <div class="j-span6 j-unit">
                                    <label class="j-label">Your email</label>
                                    <div class="j-input {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label class="j-icon-right" for="email">
                                            <i class="icofont icofont-envelope"></i>
                                        </label>
                                        <input type="email" required id="email" name="email">
                                        <span class="j-tooltip j-tooltip-right-top">Email Address</span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                    <small>{{ $errors->first('email') }}</small>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="j-span6 j-unit {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                    <label class="j-label">Phone/Mobile</label>
                                    <div class="j-input">
                                        <label class="j-icon-right" for="phone">
                                            <i class="icofont icofont-phone"></i>
                                        </label>
                                        <input type="text" id="phone" name="phone_number">
                                        <span class="j-tooltip j-tooltip-right-top">Mobile Number</span>
                                        @if ($errors->has('phone_number'))
                                            <span class="help-block">
                                                <small>{{ $errors->first('phone_number') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- start password  -->
                            <div class="j-row">
                                <div class="j-span6 j-unit  {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label class="j-label">Password</label>
                                    <div class="j-input">
                                        <label class="j-icon-right" for="password">
                                            <i class="icofont icofont-ui-password"></i>
                                        </label>
                                        <input type="password" required id="password" name="password">
                                        <span class="j-tooltip j-tooltip-right-top">Password</span>
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
                                        <label class="j-icon-right" for="password_confirmation">
                                            <i class="icofont icofont-ui-password"></i>
                                        </label>
                                        <input type="password" required id="password_confirmation" name="password_confirmation">
                                        <span class="j-tooltip j-tooltip-right-top">Confirm Password</span>
                                    </div>
                                </div>
                            </div>

                            <div class="j-unit">
                                <label class="j-label">Address</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="address">
                                        <i class="icofont icofont-location-pin"></i>
                                    </label>
                                    <input type="text" id="address" name="address">
                                    <span class="j-tooltip j-tooltip-right-top">Your Address</span>
                                </div>
                            </div>
                            <!-- start Company Branch  -->
                        </div>
                        <!-- end /.content -->
                        <div class="j-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- end /.footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).on('change click blur','#loadBranches',function(){
           var id = $(this).val();
           $('#branches').load('{{URL::to("load-branch")}}/'+id);
        });
        $('#loadBranches')
    </script>
@endsection

