@extends('layouts.app')


@section('top')

	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')



	<div class="box">
		<form  method="POST" action="/institutes">
			{{csrf_field()}}				

			<label> Name:</label>
			<input type="text" name="name" > <a href=""> </a> <br> <br>	
			<button type="submit" class="button is-success" >Create Institute</button>
		
		</form>	
	</div>

	{{-- <a href="/institutes"> See Institute List </a>	 --}}
	<a class="button" href="/institutes">Institute List</a>

@endsection	