
@extends('layouts.app')

@section('mainbody')

<div>





	<form method="POST" action="/resellers">

		<label> Name:</label>
		<input id="name"type="text" name="name" value={{$user->name}}> <br> <br>		

		<label> Phone Number:</label>
		<input id="phoneNumber"type="integer" name="phone_number" 
			   value={{$user->phone_number}}> <br> <br>

		<label> Address:</label>
		<input id="address"type="text" name="address" value={{$user->address}} > <br> <br>

		<label> Pan Card Details:</label>
		<input id="panCard"type="text" name="pan_card"  value={{$user->pan_card}}> <br> <br>

		<label> Email:</label>
		<input id="email"type="email" name="email" value={{$user->email}}> <br> <br>

		<label> Password:</label>
		<input id="password"type="password" name="password" value={{$user->password}}> <br> <br>

		<footer class="modal-card-foot">
			<button type="submit" class="button is-success" >Save changes</button>
			<button class="button" @click="closeModal()">Cancel</button>
		</footer>

	</form>	

</div>

@endsection


