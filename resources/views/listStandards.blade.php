@extends('layouts.app')

@section('mainbody')

	<div id="app" class="Box">

		<modifystandard :standard="{{  json_encode($standards) }}"> </modifystandard>
		
		
	</div>

@endsection	