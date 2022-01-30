@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				<h3 class="box-title">Admin List <span class="badge badge-pill badge-danger"> {{ count($admin_role_data) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Admin Name  </th>
								<th>Admin Email </th>
                                <th>Role </th>
								<th>Status</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($admin_role_data as $item)

							<tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    
            @if($item->brand == 1)
			<span class="badge btn-primary">Brand</span>
			@else
			@endif

			@if($item->categories == 1)
			<span class="badge btn-secondary">Category</span>
			@else
			@endif


			@if($item->products == 1)
			<span class="badge btn-success">Product</span>
			@else
			@endif


			@if($item->slider == 1)
			<span class="badge btn-danger">Slider</span>
			@else
			@endif


			@if($item->coupons == 1)
			<span class="badge btn-warning">Coupons</span>
			@else
			@endif


			@if($item->shipping_area == 1)
			<span class="badge btn-info">Shipping</span>
			@else
			@endif


			@if($item->manage_blog == 1)
			<span class="badge btn-light">Blog</span>
			@else
			@endif


			@if($item->site_setting == 1)
			<span class="badge btn-dark">site Setting</span>
			@else
			@endif


			@if($item->return_order == 1)
			<span class="badge btn-primary">Return Order</span>
			@else
			@endif


			@if($item->manage_review == 1)
			<span class="badge btn-secondary">Review</span>
			@else
			@endif


			@if($item->orders == 1)
			<span class="badge btn-success">Orders</span>
			@else
			@endif

			@if($item->manage_stock == 1)
			<span class="badge btn-danger">Stock</span>
			@else
			@endif

			@if($item->all_reports == 1)
			<span class="badge btn-warning">Reports</span>
			@else
			@endif

			@if($item->all_users == 1)
			<span class="badge btn-info">Alluser</span>
			@else
			@endif

			@if($item->manage_admin == 1)
			<span class="badge btn-dark">Adminuserrole</span>
			@else
			@endif


            @if($item->show_by_category == 1)
			<span class="badge btn-warning">show by category</span>
			@else
			@endif

            @if($item->mega_menu == 1)
			<span class="badge btn-danger">mega menu</span>
			@else
			@endif


			@if($item->show_by_brand == 1)
			<span class="badge btn-info">show by brand</span>
			@else
			@endif


			@if($item->seo_setting == 1)
			<span class="badge btn-light">Seo Setting</span>
			@else
			@endif


			@if($item->extra_option == 1)
			<span class="badge btn-dark">Extra Option</span>
			@else
			@endif

                                </td>
								<td>
									@if($item->status == 1)
									<span class="badge badge-pill badge-success"> Active </span>
									@else
								<span class="badge badge-pill badge-danger"> InActive </span>
									@endif

								</td>
								
								<td style="width:24%">
                                    <a href="{{ route('edit.admin',$item->id) }}" class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('view.admin',$item->id) }}" class="btn btn-success" title="View" ><i class="fa fa-eye"></i></a>
									<a href="{{ route('delete.admin',$item->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></a>
									@if($item->status == 1)
									<a href="{{ route('admin.inactive',$item->id) }}" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
										@else
									<a href="{{ route('admin.active',$item->id) }}" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
										@endif
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

			  
			  <!-- /.box -->          
			</div>
			<!-- /.col-8 -->


        
    <!-- /.box-body -->
    </div>
    <!-- /.box -->

 
 <!-- /.box -->          
</div>

		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  


	  </div>
 



      

@endsection