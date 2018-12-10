
@extends('layouts.app')

@section('mainbody')
		
			
	<div id="app">		

			{{-- @foreach($institutes as $institute) --}}


				{{-- <li> <a href=institutes/{{$institute->id}}> {{$institute->name}}</a> </li> --}}

			{{-- @endforeach	 --}}
			
			<modifyinstitute :institute="{{  json_encode($institutes) }}"> </modifyinstitute>

			<!-- Submit button to be added. Axios request Post Method to ResellerController Create -->
			
	</div>
@endsection
	
