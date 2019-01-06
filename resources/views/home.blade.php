@extends('layouts.app')

@section('top')

	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

<div class="section has-text-dark">
	<p> <h3> Good Morning, {{auth()->user()->name}}. your role is {{auth()->user()->role}}  </h3/></p>
</div>
<div class="columns is-mobile">
	
	<div class="column is-one-quarter">
		<figure class="image is-480x480">
			<div class="box"> 
			<div class="content">	
				<p class="has-text-dark"> <a href="/resellers"> <h2> Reseller </h2></a> </p>
			</div>
			<a href='/resellers'> <img src="/Reseller.png">  </a>
			</div>
		</figure>
	</div>

	<div class="column is-one-quarter">
		<figure class="image is-256x256">
			<div class="box">
				<div class="content">	
					<p class="has-text-dark"> <a href="/institutes"> <h2> Institute </h2></a></p>
				</div>
			<a href='/institutes'>  <img src="/institute.png"> </a>
			</div>
		</figure>
	</div>	
	<div class="column is-one-quarter">
		<figure class="image is-256x256">
			<div class="box">
				<div class="content">	
					<p class="has-text-dark"><a href="/admins"> <h2> Admin </h2> </a></p>
				</div>
			<a href='/institutes'>  <img src="/admin.png"> </a>
		</div>
		</figure>
	</div>	
	<div class="column is-one-quarter">
		<figure class="image is-256x256">
			<div class="box">
				<div class="content">	
					<p class="has-text-dark"> <a href='/students'> <h2>Students</h2> </a></p>
				</div>
			<a href='/institutes'>  <img src="/student.png"> </a>
		</div>
		</figure>
	</div>	

</div>
@endsection