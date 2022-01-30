@extends('admin.admin_master')
@section('admin')
@php

$id =  Auth()->guard('admin')->id();
$adminData = DB::table('admins')->find($id);
@endphp

@if($adminData->extra_option == 1)


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-sm-12 col-md-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Blog Post List <span class="badge badge-pill badge-danger"> {{ count($blogpost) }} </span></h3>
<a href="{{ route('add.post') }}" class="btn btn-success" style="float: right;">Add Post</a>				  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>

								<th>Post Category  </th>
								<th>Post Image </th>
								<th>Post Title En </th>
								<th>Post Title Hin </th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($blogpost as $item)
	 <tr>

     <td>{{ $item->category->blog_category_name_en }}</td>
		 <td> <img src="{{ asset($item->post_image) }}" style="width: 60px; height: 60px;"> </td>
		<td>{{ $item->post_title_en }}</td>
		 <td>{{ $item->post_title_others }}</td>
		<td width="20%">
 <a href="{{ route('blog.post.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="{{ route('post.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
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