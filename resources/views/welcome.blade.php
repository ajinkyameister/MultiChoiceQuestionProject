@extends('layouts.app')

@section('top') 
	@component('components.topnavbar') @endcomponent @endsection

@section('siteheader') 
	@component('components.siteheader') @endcomponent @endsection

@section('mainbody')

	<div class="columns is-mobile is centered">
		<div class="column is-half">

			<br> <br>

			<p class="bd-notification is-primary"> 	
				@component('components.loginform')	@endcomponent

			</p>
		</div>

		<div class="column is-half">

			@component('components.registerform')	@endcomponent					

		</div>

	</div>	

@endsection	

@section('footer')

	{{-- @component('components.menu') @endcomponent --}}
@endsection