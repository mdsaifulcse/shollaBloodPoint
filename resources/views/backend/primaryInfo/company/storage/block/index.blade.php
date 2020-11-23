@extends('layouts.app')
@section('breadcrumb')
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{URL::to('/')}}">
				<i class="feather icon-home"></i>
			</a>
		</li>

		<li class="breadcrumb-item">
			<a>Storage Bock</a>
		</li>
	</ul>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header card-info">
					All storage block
					<div class="card-btn pull-right">
						<a href="{{URL::to('storage-block/create')}}" title="Create New Storage Block" class="btn btn-primary btn-sm" > <i class="fa fa-plus-circle"></i> Add New</a>

					</div>
				</div>
				<div class="card-body">
						<div class="table-responsive">
							<table id="allStorageBlocks" class="table  table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th>Sl</th>
									<th>Block</th>
									<th>Storage</th>
									<th width="16%;">Action</th>
								</tr>
								</thead>
								<tbody>
                                <?php $i=0; ?>
                                    <?php $i++; ?>

								</tbody>
							</table>
						</div>
				</div>
			<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
@endsection

@section('script')
	<script type="text/javascript">
        $(function() {
            $('#allStorageBlocks').DataTable( {
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: '{{url('/show-all-storage-blocks')}}',
                columns: [
                    { data: 'id',name:'id'},
                    { data: 'block_name',name:'block_name'},
                    { data: 'storage_name',name:'storages.storage_name'},
                    { data: 'action'}
                ]
            });

        });
	</script>

	@endsection


