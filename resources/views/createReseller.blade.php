@extends('layouts.app')


@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

{{-- <div class="box"> --}}

	<div class="field">

		{{-- <form  method="POST" action="/resellers">
			{{csrf_field()}}

			<div class="field">
				<label class="label"> Name:</label>
				<div class="control">
					<input type="text" id="name" name="name" > <a href=""> </a> <br> <br>	
				</div>
			</div>
			<div class="field">
				<label class="label"> Address:</label>
				<input type="text" id="address" name="address" > <br> <br>
			</div>

			<div class="field">	
				<label class="label"> Phone Number:</label>
				<input type="text" id= "phone_number"name="phone_number" > <br> <br>
			</div>
			<div class="field">	
				<label class="label"> Email:</label>
				<input type="text" id= "email"name="email" > <br> <br>
			</div>
			<div class="field">	
				<label class="label"> PAN Card:</label>
				<input type="text" id="pan_card"name="pan_card" > <br> <br>
			</div>
			<div class="field">	
				<label class="label">  Password:</label>
				<input type="password" id = "password"name="password" > <br> <br>
			</div>

			<button type="submit" class="button is-success" >Save changes</button>

		</form>	 --}}
	{{-- </div> --}}

	<form  method="POST" action="/resellers" enctype="multipart/form-data" files= true>
		{{csrf_field()}}
		<div class="field">
			<label class="label">Name</label>
			<div class="control has-icons-left has-icons-right">
				<input class="input is-success" name="name" type="text" placeholder="Text input" value="">
				<span class="icon is-small is-left">
					<i class="fas fa-user"></i>
				</span>
				<span class="icon is-small is-right">
					<i class="fas fa-check"></i>
				</span>
			</div>
			<p class="help is-success">This username is available</p>
		</div>

		<div class="field">
			<label class="label">Address</label>
			<div class="control has-icons-left has-icons-right">
				<input class="input is-danger" name="address" type="text" placeholder="Postal Address" value="">
				<span class="icon is-small is-left">
					<i class="fas fa-address-card"></i>
				</span>
				<span class="icon is-small is-right">
					<i class="fas fa-exclamation-triangle"></i>
				</span>
			</div>

			<div class="field">
				<label class="label">Phone Number</label>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-danger" name="phone_number"  type="text" placeholder="Mobile Number" value="">
					<span class="icon is-small is-left">
						<i class="fas fa-phone"></i>
					</span>
					<span class="icon is-small is-right">
						<i class="fas fa-exclamation-triangle"></i>
					</span>
				</div>
			</div>	

			<div class="field">
				<label class="label">Email</label>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-danger" name="email" type="email" placeholder="Email " value="">
					<span class="icon is-small is-left">
						<i class="fas fa-envelope"></i>
					</span>
					<span class="icon is-small is-right">
						<i class="fas fa-exclamation-triangle"></i>
					</span>
				</div>
			</div>	



			<div class="field">
				<label class="label">PAN CARD</label>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-danger" name="pan_card"  type="text" placeholder="Pan Card" value="">
					<span class="icon is-small is-left">
						<i class="fas fa-id-card-alt"></i>
					</span>
					<span class="icon is-small is-right">
						<i class="fas fa-exclamation-triangle"></i>
					</span>
				</div>
			</div>

			<div class="field">
				<label class="label">Password</label>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-danger" name="password" type="password" placeholder="Enter Password" value="">
					<span class="icon is-small is-left">
						<i class="fas fa-envelope"></i>
					</span>
					<span class="icon is-small is-right">
						<i class="fas fa-exclamation-triangle"></i>
					</span>
				</div>
			</div>

			<div class="form-group has-text-dark">
				<label for="reseller">Upload Image:</label>
				<input type="file" class="form-control" name="resellerimage"/>
			</div>

			<button type="submit" class="button is-success" >Save changes</button>

			

		</form>	 <br>

		<a href="/resellers"> go back to all resellers </a>	
		@endsection	

