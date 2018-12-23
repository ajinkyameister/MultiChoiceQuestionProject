@extends('layouts.app')


@section('top')

	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')



	<div class="box">
		<form  method="POST" action="/resellers">

				

						<label> Name:</label>
						<input type="text" name="name" > <a href=""> </a> <br> <br>	
			

						<label> Address:</label>
						<input type="text" name="address" > <br> <br>
						
						<label> Phone Number:</label>
						<input type="text" name="phone_number" > <br> <br>
						
						<label> Email:</label>
						<input type="text" name="email" > <br> <br>
						
						<label> PAN Card:</label>
						<input type="text" name="pan_card" > <br> <br>

						<label> Password:</label>
						<input type="password" name="password" > <br> <br>

						<button type="submit" class="button is-success" >Save changes</button>
						
					</form>	
	</div>

	<a href="/resellers"> go back to all resellers </a>	
@endsection	