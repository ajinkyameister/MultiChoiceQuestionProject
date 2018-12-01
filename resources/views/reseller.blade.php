@extends('layouts.app')

@section('top')
	@component('components.topnavbar') @endcomponent @endsection

@section('siteheader')
	<h1> Reseller </h1>
@endsection

@section('mainbody')

<div id="root">
	<a class="button is-link is-rounded"  onclick="openModal()"  >Add Reseller</a>

	<div id ="Display" class= "modal">
		<div class="modal-background"></div>
		<div class="modal-content">
			Any other Bulma elements you want
		</div>
		<button class="modal-close is-large" aria-label="close" onclick="closeModal()"></button>
	</div>

</div>	
	
@endsection

<script type="text/javascript">

	var modalStatus = false;
	
	function openModal(){

		document.getElementById('Display').className="modal is-active";
	}
	function closeModal(){

		document.getElementById('Display').className="modal";
	}

</script>

