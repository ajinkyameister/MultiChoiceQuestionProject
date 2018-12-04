
@extends('layouts.app')

@section('mainbody')
		
			
	<div id="app">		

			@foreach($resellers as $user)


				<li> <a href=users/{{$user->id}}> {{$user->name}}</a> </li>

			@endforeach	


			
	</div>
@endsection
	
