@extends('admin.admin_master')

@section('admin')
@php

$id =  Auth()->guard('admin')->id();
$adminData = DB::table('admins')->find($id);
@endphp

@if($adminData->extra_option == 1)


<div class="container-full">
	

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Views Contact Us</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

					  <div class="row">
						<div class="col-12">						
							
                         <div class="row mb-5"> <!-- Start 1st row -->

					

                            <div class="col-md-6 col-sm-12">

                                <div class="form-group">
                                <h5 for="wlastName2"> Name : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    <span>{{ $contact->name }} </span>
                                    </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                            <div class="col-md-6 col-sm-12">

                                <div class="form-group">
                                <h5 for="wlastName2"> Email Addreess : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    <span> {{ $contact->email }} </span>
                                    
                                </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                          

								<div class="col-md-6 col-sm-12">

								<div class="form-group">
								<h5 for="wlastName2">Comment: <span class="danger">*</span> </h5>
								<div class="controls">
									 <span> {!! $contact->comment !!} </span>
                                    </div>
								</div>

								</div>  <!--  col md 4 -->


                         </div>  <!-- End 1st row -->
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




		


	  @else
	<div class="text-center" style="padding-top:100px;">
  <h5>This Page didn't permission </h5>
	</div>
  @endif















@endsection