
@extends('layouts.app')

@section('mainbody')

	<form method="POST" action="/institutes/{{$institute->id}}">
		{{ method_field('PATCH') }}

		{{csrf_field()}}

		<label> Name:</label>
		<input id="name" type="text" name="name" value="{{$institute->name}}"> </input> <br> <br>			

		<button type="submit" class="button is-success" >Save changes</button>
		
	</form>	

@endsection


