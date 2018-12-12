@extends('layouts.app')

@section('mainbody')

<div id="app" class="Box">

			<standard >

			</standard>

			<a class="button is-link is-rounded" href="/standards/show">Modify Standard</a>  <br> <br>	

			<show-exams-for-selected-standard> </show-exams-for-selected-standard>
			<!-- <a class="button is-link is-rounded" href="/standards/show">Show All Standards</a> -->
	
</div>

@endsection	