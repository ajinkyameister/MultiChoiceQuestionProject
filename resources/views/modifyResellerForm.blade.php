
@extends('layouts.app')

@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')


<form method="POST" action="/resellers/{{$user->id}}">
		{{ method_field('PATCH') }}

		{{csrf_field()}}
<div class="box">

	<div class="field">
		<label class="label">Name</label>
		<div class="control has-icons-left">
			<input class="input" name ="name" type="text" placeholder="" value="{{$user->name}}">
			<span class="icon is-small is-left">
				<i class="fas fa-user"></i>
			</span>
		</div>
	</div>

	<div class="field">
		<label class="label">Phone Number</label>
		<div class="control has-icons-left has-icons-right">
			<input class="input" name="phone_number" type="text" placeholder="Text input" 
			value="{{$user->phone_number}}">
			<span class="icon is-small is-left">
				<i class="fas fa-phone"></i>
			</span>
		</div>

	</div>

	<div class="field">
		<label class="label">Email</label>
		<div class="control has-icons-left has-icons-right">
			<input class="input " name ="email"
				 type="email" placeholder="Email input" value="{{$user->email}}">
			<span class="icon is-small is-left">
				<i class="fas fa-envelope"></i>
			</span>
			<span class="icon is-small is-right">
				<i class="fas fa-exclamation-triangle"></i>
			</span>
		</div>
	</div>

	<div class="field">
		<label class="label">Address</label>
		<div class="control has-icons-left has-icons-right">
			<input class="input " name="address" type="text" placeholder="" value="{{$user->address}}">
			<span class="icon is-small is-left">
				<i class="fas fa-address-card"></i>
			</span>
		</div>

	</div>

	<div class="field">
		<label class="label">Pan Card</label>
		<div class="control has-icons-left has-icons-right">
			<input class="input " name="pan_card" type="text" placeholder="" 
				value="{{$user->pan_card}}">
			<span class="icon is-small is-left">
				<i class="fas fa-address-card"></i>
			</span>
		</div>
	</div>

	
	<button type="submit" class="button is-success" >Save changes</button>
	<button class="button" @click="closeModal()">Cancel</button>
</div>
</form>


@endsection


