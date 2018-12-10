@extends('layouts.app')


@section('mainbody')


	<div id="app">
		
		
			@foreach($standards as $standard)

				<li>
					<a> {{$standard->name}} </a>
				</li>

			@endforeach
		
	</div>

@endsection
