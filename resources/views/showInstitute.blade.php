@extends('layouts.app')


@section('top')

	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

	<div class="box">
		{{-- {{$user->id}} --}}

		{{$institutes->name}}
		
	</div>

	<a class="button" href="/institutes">Institute List</a>>	
@endsection	