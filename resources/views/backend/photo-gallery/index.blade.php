@extends('layouts.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('gallery')}}">
                Photo Gallery
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        <div class="card-btn pull-right">
                            <a  href="{{URL::to('/gallery/create')}}" class="btn btn-primary btn-sm" title="Add new photo gallery" > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Photo Gallery List</h4>
                    </div>
                    <div class="card-body">
                        <!--  -->
                        <div class="view_branch_set  table-responsive">

                            @if(count($photos)>0)
                                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                    <tr>
                                        <th width="1%;">Sl</th>
                                        <th width="3%;">Title</th>
                                        <th width="1.5%;">Date</th>
                                        <th width="2%;">Link</th>
                                        <th width="1%;">Status</th>
                                        <th width="1%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>

                                    @foreach($photos as $photo)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$photo->title}}</td>
                                            <td>{{date('d-m-Y',strtotime($photo->event_date))}}</td>
                                            <td><a href="{{$photo->photo_link}}" target="_blank"> <i class="fa fa-external-link" aria-hidden="true"></i> Photo Link</a></td>
                                            <td class="text-dark">
                                                @if($photo->status==1)
                                                    <a title="Active"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                                @else
                                                    <a title="Inactive" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                                @endif
                                            </td>
                                            <td>
                                                <a  href="{{URL::to('/gallery/'.$photo->id.'/edit')}}" class="btn btn-warning btn-xs" title="Click here to edit this" > <i class="fa fa-edit"></i></a>
                                            <!-- delete section -->
                                                {{--{{Form::open(array('route'=>['gallery.destroy',$photo->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$photo->id"))}}--}}
                                                {{--<button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$photo->id}}")'><i class="fa fa-trash"></i></button>--}}
                                                {{--{!! Form::close() !!}--}}
                                            <!-- delete section end -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <h2 class="text-danger text-center"> No data available here. </h2>
                                    @endif
                                    </tbody>
                                </table>
                                {{$photos->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
