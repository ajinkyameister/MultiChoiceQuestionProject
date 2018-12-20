@extends('layouts.app')


@section('top')

	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

	<div class="box">
		{{$user->id}}

		{{$user->name}}
		
	</div>

	<a href="/resellers"> go back to all resellers </a>	
@endsection	