@extends('layouts.app')

@section('top')
	@component('components.topnavbar') @endcomponent
@endsection

@section('mainbody')

	<div id="app" class="Box">

		<modifystandard :standard="{{  json_encode($standards) }}"> </modifystandard>
		
		
	</div>

@endsection	