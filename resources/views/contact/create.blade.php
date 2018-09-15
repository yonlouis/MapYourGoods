@extends('layouts.master', ['title' => 'Contact']) 

{{-- Lorsqu'on hérite du layout 'master', on définit une variable 'title' qui vaut 'Contact'. --}}

@section('content')

	<div class="container text-center">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>CONTACT US</h2>
				<?php $endDate = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2016-11-08 14:25:00'); ?>

				{{ Carbon\Carbon::now() }}

				@if (($endDate) > Carbon\Carbon::now()  )
				<div class="alert alert-danger">
					<p class="text-muted"><strong>Customer service will give you a response in 4h max.
					<br>From Monday to Friday from 9 a.m. to 5 p.m.</strong></p>
				</div>
				@else
				<div class="alert alert-warning">
					<p class="text-muted"><strong>Customer service will give you a response in 4h max.
					<br>From Monday to Friday from 9 a.m. to 5 p.m.</strong></p>
				</div>
				@endif

				<form action="#" method="POST">
				  <div class="form-group text-left">
				    <label for="name" class="control-label">Name</label>
				    <input type="text" name="name" class="form-control" id="name" required="required" placeholder="Enter name"> 
				  </div>
				  <div class="form-group text-left">
				    <label for="email" class="control-label">Email</label>
				    <input type="text" name="email" class="form-control" id="email" required="required" placeholder="Enter name">
				  </div>
				    
				  <div class="form-group text-left">
				    <label for="message" class="control-label">Message</label>
				    <textarea type="text" rows=10 cols=10 name="message" class="form-control" id="message" required="required" placeholder="Enter message">
				  	</textarea>
				  </div>
				  <div class="form'group">
				  <button class="btn btn-default btn-block">Submit &raquo;</button>
				</form>
			</div>
		</div>
	</div> 




@stop