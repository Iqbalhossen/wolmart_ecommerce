@extends('admin.admin_master')
@section('admin')
@php

$id =  Auth()->guard('admin')->id();
$adminData = DB::table('admins')->find($id);
@endphp

@if($adminData->manage_review == 1)


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Publish All Products Reviews </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Comment </th>
								<th>User </th>
								<th>Product  </th>
								<th>Status </th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($review as $item)
	 <tr>
		<td> {{ $item->comment }}  </td>
		<td>  {{ $item->user->name }}  </td>

		<td> {{ $item->product->product_name_en }}  </td>
		<td>
		@if($item->status == 0)
      <span class="badge badge-pill badge-primary">Pending </span>
       @elseif($item->status == 1)
       <span class="badge badge-pill badge-success">Publish </span>
		@endif

		  </td>

		<td width="25%">
  <a href="{{ route('delete.review',$item->id) }}" class="btn btn-danger" id="delete">Delete </a>
		</td>

	 </tr>
	  @endforeach
						</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->






		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>


	  @else
	<div class="text-center" style="padding-top:100px;">
  <h5>This Page didn't permission </h5>
	</div>
  @endif


@endsection 