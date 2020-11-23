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
                    <i class="fa fa-info"></i> View storage block info of ({{$getStorageBlock->storage->storage_name}})
                    <div class="card-btn pull-right">
                        <a href="{{URL::to('storage-block')}}" title="View All Block of Storage" class="btn btn-primary btn-sm" > <i class="fa fa-list"></i> View All</a>
                    </div>
                </div>

                <div class="card-body">

                        <div class="form-group row ">
                            {{Form::label('storage_id', 'Storage', array('class' => 'col-md-3 control-label'))}}
                            <div class="col-md-8">
                                {{Form::text('storage_id',$getStorageBlock->storage->storage_name,array('class'=>'form-control','required'=>true,'readonly'=>true))}}

                            </div>
                        </div>

                    <div class="form-group row ">
                        {{Form::label('block_name', 'Block Name *', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('block_name',$value=$getStorageBlock->block_name,array('class'=>'form-control','readonly'=>true))}}
                        </div>
                    </div>
                    <div class="form-group row ">
                        {{Form::label('details', 'Details', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            {{Form::textarea('details',$value=$getStorageBlock->details,array('class'=>'form-control','rows'=>5,'readonly'=>true))}}
                        </div>
                    </div>

                    <div class="form-group row ">
                        {{Form::label('self_of_block', 'Self Name/Number', array('class' => 'col-md-3 control-label'))}}
                        <div class="col-md-8">
                            <?php
                            $value=$getStorageBlock->selfOfBlocks->pluck('self_of_block')->toArray();
                            $value = implode(',',$value);

                            ?>
                            {{Form::text('self_of_block',$value,array('class'=>'form-control tagit'))}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                           <a href="{{URL::to('storage-block')}}" class="btn btn-warning btn-sm"> <i class="fa fa-angle-double-left"></i> Back</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".tagit").tagit({
                unique: true,
                space:true
            });
        });
    </script>
@endsection




