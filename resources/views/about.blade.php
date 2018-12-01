@extends('layouts.app')

@section('siteheader')
	<div class="container">
	<h1> About Us</h1>
		<p>this is our school.We are the "School Website Company"
	We are usually known as "EduNet" or "EdNet" by our schools. For them, we are the "school website company" – in actuality – we are a software company. Our team of highly talented software engineers works hard to improve the functionality of our Content Management System (CMS) every day, so that schools can benefit as much as possible from their websites.</p>

</div>
@endsection

@section('top')

	@component('components.topnavbar') @endcomponent
@endsection

@section('images') 
	
	@component('components.images') @endcomponent
@endsection

@section('footer')

	{{-- @component('components.menu') @endcomponent --}}
@endsection


