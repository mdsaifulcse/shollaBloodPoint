@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{URL::to('notice')}}">Notices</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header card-info">
                    Create new Notice
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('notice')}}" title="View All Notices" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> All Notices</a>
                    </div>
                </div>

                {!! Form::open(array('route' =>'notice.store','method'=>'POST','class'=>'form-horizontals','files'=>true)) !!}
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <label>Notice Title</label>
                            <div class="">
                                {{Form::text('title',$value=old('title'),['class'=>'form-control','required'=>true])}}
                                <span class="text-danger">
                                    {{$errors->has('title')?$errors->first('title'):''}}
                                    </span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Status</label>
                            <div class="">
                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('status')?$errors->first('status'):''}}
                                </span>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <label>Serial No:</label>
                            <div class="">
                                {{Form::number('serial_num',$value=$maxNum+1,['min'=>1,'max'=>$maxNum+1,'class'=>'form-control','required'=>true])}}
                            </div>
                            <span class="text-danger">
                                    {{$errors->has('status')?$errors->first('status'):''}}
                                </span>
                        </div>
                    </div><!--end row-->

                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Details</label>
                            <div class="">
                                {{Form::textarea('details',$value=old('details'),['class'=>'form-control tinymce','placeholder'=>'Details about our page','required'=>false,'rows'=>8])}}
                                <span class="text-danger">
                                {{$errors->has('details')?$errors->first('details'):''}}
                                </span>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <label>Select Page Image</label>

                        <div class="">
                            <span class="text-danger">{{$errors->has('photo')?$errors->first('photo'):''}}</span>
                            <label class="slide_upload"  for="pageImage">
                                <img id="selectedImg" src="{{asset('images/default/photo.png')}}" width="150" height="120" title="Page Image">
                            </label>
                            <input type="file" id="pageImage" name="photo" onchange="loadImg(this,this.id)" class="form-control"  accept="image/*" style="display: none">
                        </div>

                    </div>
                    <!--  End Contact Information -->
                    <div class="form-group row">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-folder"></i> Save</button>
                        </div>
                    </div>
                </div><!--  card-body -->
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        function loadImg(input,selectedImg) {
            var target_image='#'+$('#'+selectedImg).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection





