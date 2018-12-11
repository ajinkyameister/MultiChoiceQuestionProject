@extends('layouts.app')


@section('mainbody')


	<div id="app">
		
		
			<!-- @foreach($standards as $standard)

				<li>
					<a> {{$standard->name}} </a>
				</li>

			@endforeach -->
		
			<exams :standard= "{{  json_encode($standards) }}"> </exams>

	</div>

@endsection
