@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('public/js/tree/hummingbird-treeview.css')}}">
@endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{URL::to('acl-role')}}">
                ACL Roles
            </a>
        </li>

        <li class="breadcrumb-item">
            <a>  Permission assign to Role</a>
        </li>
    </ul>
@endsection
@section('content')
    <style type="text/css">
        .permission_label{border:1px solid #ddd;cursor: pointer;}
    </style>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        Permission assign to {{$role->name}}
                        <div class="card-btn pull-right">

                            <a href="{{URL::to('acl-role')}}" class="btn btn-success btn-sm">Roles</a>

                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('url' => 'acl-permission-role','class'=>'form-horizontals','method'=>'POST','role'=>'form','data-parsley-validate novalidate')) !!}
                        <input type="hidden" name="role_id" value="{{$role->id}}">
                        <div class="row">


                            <div class="col-md-6">

                                <fieldset>
                                    <legend> Resource Permission  </legend>
                                <div id="treeview_container" class="hummingbird-treeview well h-scroll-large">
                                    <ul id="treeview" class="hummingbird-base">
                                        <?php
                                        $i=0;
                                        ?>
                                        @foreach($resource as $res)
                                            <?php
                                            $i++;
                                            $s=0;
                                            ?>
                                            <li><i class="fa @if(count($oldPermission[$res])>0) fa-minus @else fa-plus @endif"></i> <label> <input id="node-{{$i}}" data-id="custom-{{$i}}" type="checkbox"> {{$res}} </label>
                                                <ul class="sub-permission" @if(count($oldPermission[$res])>0) style="display: block;" @endif>
                                                    @foreach($allResource[$res] as $data)
                                                        <?php
                                                        $s++;
                                                        if(isset($permissionRole[$data->id])){
                                                            $check = 'checked';
                                                        }else{
                                                            $check ='';
                                                        }
                                                        ?>
                                                        <li><label> <input name="permission_id[]" class="hummingbirdNoParent" id="node-{{$i}}-{{$s}}" value="{{$data->id}}" {{$check}} data-id="custom-{{$i}}-{{$s}}" type="checkbox">  {{$data->name}} </label></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">

                                <fieldset>
                                    <legend> Normal Permission  </legend>
                                    <ul>
                                        @foreach($normalPermission as $normal)
                                            <?php
                                            if(isset($permissionRole[$normal->id])){
                                                $check = 'checked';
                                            }else{
                                                $check ='';
                                            }
                                            ?>
                                            <li><label> <input {{$check}} value="{{$normal->id}}" name="permission_id[]" type="checkbox"> {{$normal->name}} </label> </li>
                                        @endforeach
                                    </ul>
                                </fieldset>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>


                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Tree view js -->
    <script type="text/javascript" src="{{asset('public/js/tree/hummingbird-treeview.js')}}"></script>
    <script>
        $("#treeview").hummingbird();
    </script>

@endsection
