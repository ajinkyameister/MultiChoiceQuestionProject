@extends('layouts.app')


@section('mainbody')


	<div id="app">
		
		
			<!-- @foreach($standards as $standard)

				<li>
					<a> {{$standard->name}} </a>
				</li>

			@endforeach -->

			<p class="title is-1 is-spaced">List of Standards To Create An Exam</p>

			<p class="title is-5 is-spaced">

				<exams :standard= "{{  json_encode($standards) }}"> </exams>
			</p>

			<!-- <a class="button is-link is-rounded" href="/exams/show">Show Exams </a> -->

			

			<show-exams-under-standard> </show-exams-under-standard>
	</div>

@endsection
