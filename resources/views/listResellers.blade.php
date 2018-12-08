
@extends('layouts.app')

@section('mainbody')
		
			
	<div id="app">		

			@foreach($resellers as $user)


				<li> <a href=users/{{$user->id}}> {{$user->name}}</a> </li>

			@endforeach	

			<modifyreseller :reseller="{{  json_encode($resellers) }}"> </modifyreseller>

			<!-- Submit button to be added. Axios request Post Method to ResellerController Create -->
			
	</div>
@endsection
	
