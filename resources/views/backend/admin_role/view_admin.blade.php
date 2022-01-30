@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container-full">
	

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Admin</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

                        
               <div class="row">
				<div class="col-md-4">

                <span>Name: {{$admin_role_data->name}} </span>

                </div>
				<!-- /.col -->
                <div class="col-md-4">

                <span> Name: {{$admin_role_data->email}} </span>

                </div>
				<!-- /.col -->

                <div class="col-md-4">
                <span> Status </span>
                @if($admin_role_data->status == 1)
                
                <span class="badge btn-primary">Active</span>
                @else
                <span class="badge btn-danger">Inactive</span>
		    	@endif

                </div>
                <!-- /.col -->


                <div class="col-md-12" style="margin-top:50px;">

                @if($admin_role_data->brand == 1)
			<span class="badge btn-primary">Brand</span>
			@else
			@endif

			@if($admin_role_data->categories == 1)
			<span class="badge btn-secondary">Category</span>
			@else
			@endif


			@if($admin_role_data->products == 1)
			<span class="badge btn-success">Product</span>
			@else
			@endif


			@if($admin_role_data->slider == 1)
			<span class="badge btn-danger">Slider</span>
			@else
			@endif


			@if($admin_role_data->coupons == 1)
			<span class="badge btn-warning">Coupons</span>
			@else
			@endif


			@if($admin_role_data->shipping_area == 1)
			<span class="badge btn-info">Shipping</span>
			@else
			@endif


			@if($admin_role_data->manage_blog == 1)
			<span class="badge btn-light">Blog</span>
			@else
			@endif


			@if($admin_role_data->site_setting == 1)
			<span class="badge btn-dark">site Setting</span>
			@else
			@endif


			@if($admin_role_data->return_order == 1)
			<span class="badge btn-primary">Return Order</span>
			@else
			@endif


			@if($admin_role_data->manage_review == 1)
			<span class="badge btn-secondary">Review</span>
			@else
			@endif


			@if($admin_role_data->orders == 1)
			<span class="badge btn-success">Orders</span>
			@else
			@endif

			@if($admin_role_data->manage_stock == 1)
			<span class="badge btn-danger">Stock</span>
			@else
			@endif

			@if($admin_role_data->all_reports == 1)
			<span class="badge btn-warning">Reports</span>
			@else
			@endif

			@if($admin_role_data->all_users == 1)
			<span class="badge btn-info">Alluser</span>
			@else
			@endif

			@if($admin_role_data->manage_admin == 1)
			<span class="badge btn-dark">Adminuserrole</span>
			@else
			@endif


            @if($admin_role_data->show_by_category == 1)
			<span class="badge btn-warning">show by category</span>
			@else
			@endif

            @if($admin_role_data->mega_menu == 1)
			<span class="badge btn-danger">mega menu</span>
			@else
			@endif


			@if($admin_role_data->show_by_brand == 1)
			<span class="badge btn-info">show by brand</span>
			@else
			@endif


			@if($admin_role_data->seo_setting == 1)
			<span class="badge btn-light">Seo Setting</span>
			@else
			@endif


			@if($admin_role_data->extra_option == 1)
			<span class="badge btn-dark">Extra Option</span>
			@else
			@endif

</div>
<!-- /.col -->


			  </div>
			  <!-- /.row -->

		

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>





@endsection