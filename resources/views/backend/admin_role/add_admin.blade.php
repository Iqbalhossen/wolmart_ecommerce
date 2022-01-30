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



					<form   action="{{ route('admin.role.store') }}"  method="post" novalidate="">

					@csrf

					  <div class="row">
						<div class="col-12">						

								<div class="row"> <!-- Start 3rd row -->

									<div class="col-md-4">

									<div class="form-group">
										<label for="wlastName2">Name : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="name" class="form-control" > 
													<div class="help-block">
														@error('name')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>


									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
										<label for="wlastName2">Email : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="email" name="email" class="form-control" > 
													<div class="help-block">
														@error('email')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
										<label for="wlastName2">Password : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="password" name="password" class="form-control" > 
													<div class="help-block">
														@error('password')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

									</div>  <!--  col md 4 -->
                                    
									<div class="col-md-4">

									<div class="form-group">
										<label for="wlastName2">Confirm Password : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="password" id="password_confirmation"  name="password_confirmation" class="form-control" > 
													<div class="help-block">
														@error('password_confirmation')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

									</div>  <!--  col md 4 -->

									</div>  <!-- End 3rd row -->




		<hr>

			  
						<div class="row">
						<div class="col-md-4">
								<div class="form-group">									
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="brand" id="checkbox_1"  value="1">
											<label for="checkbox_1">Brand</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="categories" id="checkbox_2" value="1">
											<label for="checkbox_2">Categories</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="products" id="checkbox_3"  value="1">
											<label for="checkbox_3">Products</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="coupons" id="checkbox_4" value="1">
											<label for="checkbox_4">Coupons</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="shipping_area" id="checkbox_3" value="1">
											<label for="checkbox_3">Shipping Area</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="orders" id="checkbox_5"  value="1">
											<label for="checkbox_5">Orders</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="return_order" id="checkbox_6" value="1">
											<label for="checkbox_6">Return Order</label>
										</fieldset>
                                      
									
									
                                </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="manage_stock" id="checkbox_8"  value="1">
											<label for="checkbox_8">Manage Stock</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="manage_review" id="checkbox_9" value="1">
											<label for="checkbox_9">Manage Review</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="mega_menu" id="checkbox_10"  value="1">
											<label for="checkbox_10">Mega Menu</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="show_by_category" id="checkbox_11" value="1">
											<label for="checkbox_11">Show by category</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="show_by_brand" id="checkbox_12" value="1">
											<label for="checkbox_12">Show by Brand</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="slider" id="checkbox_13"  value="1">
											<label for="checkbox_13">Slider</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="all_reports" id="checkbox_14" value="1">
											<label for="checkbox_14">All Reports</label>
										</fieldset>
                                      
									
									
                                </div>
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="manage_blog" id="checkbox_16"  value="1">
											<label for="checkbox_16">Manage Blog</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="all_users" id="checkbox_17" value="1">
											<label for="checkbox_17">All Users</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="manage_admin" id="checkbox_18"  value="1">
											<label for="checkbox_18">Admin Role</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="extra_option" id="checkbox_19" value="1">
											<label for="checkbox_19">Extra Option</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="site_setting" id="checkbox_20" value="1">
											<label for="checkbox_20">Site Setting</label>
										</fieldset>
                                        <fieldset>
											<input type="checkbox"  name="seo_setting" id="checkbox_21" value="1">
											<label for="checkbox_21">Seo Setting</label>
										</fieldset>
                                      
									
									
                                </div>
								</div>
							</div>
						</div>
						

						<div class="text-xs-right">
                        <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add Product" >
                        </div>

						</div>
					</form>

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