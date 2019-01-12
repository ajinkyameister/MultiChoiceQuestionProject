
@extends('layouts.app')

@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

	<form  name="listform" method="POST" >

		{{ csrf_field() }}
		
	<a href="/resellers/create" class="button is-success is-pulled-right"> 
		Create Reseller
	</a>
	<div class="section">
	<div class="card">
		
		<div class="columns is-multiline">

			@foreach($resellers as $user)

			<div class="column is-one-quarter">
				
					<figure class="image is-128x128" style="height: 200px; width: 200px">
							{{-- <img src={{$faker->imageUrl(400, 300,'people')}} alt="Placeholder image" style="margin-left: 10px; margin-right: 10px"> --}}
							<img src={{ asset(('storage/').$user->filename) }} alt="Placeholder image" style="margin-left: 10px; margin-right: 10px">
					</figure>
					
				</div>	

			<div class="column is-one-quarter is-size-6">
				
				<strong> {{$user->name}}</strong> <br>

				{{-- id = {{ $user->id }} --}}
				<i class="fas fa-envelope" aria-hidden="true"></i>	
					 {{$user->email}}
				<br> 
				<i class="fas fa-phone" aria-hidden="true"></i> {{$user->phone_number}}
				<br>
				
					<i class="fas fa-school" aria-hidden="true"></i> {{$user->institutes()->first()['name']}} 
					<br>
				<i class="fas fa-address-card" aria-hidden="true"></i> {{$user->address}} 
					<br>	
				<div class="card">	
				
					<footer class="card-footer">
				
						@can('crud-reseller',$user)

						<button type="submit" name="_method" value="DELETE" onclick="javascript: form.action='/resellers/'+{{$user->id}};"  
							class=" button is-danger is-small is is-pulled-right card-footer-item " > 
							 <div class="has-text-centered">delete</div>
						</button>

						<button type="submit" name="_method" value="GET" onclick="javascript: form.action='/resellers/'+{{$user->id}};" 
							class=" button is-dark is-small is-pulled-right card-footer-item" value="view">
							view
						</button>

						<button type="submit" name="_method" value="GET" 
						onclick="javascript: form.action='/resellers/edit/'+{{$user->id}};" 
						class="button is-info is-small is-pulled-right card-footer-item">
						modify
						</button>
					@endcan
				</footer>
			</div>
			</div>
			@endforeach
		</div> 
	</div>
</div>
</form>
@endsection


