
@extends('layouts.app')

@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')




{{-- <a  class="button is-danger"  onclick="javascript:location.href='resellers/'+document.listform.radio_user_selected.value"> Delete Reseller</a> --}}
{{-- <div class="view-reseller" > --}}


	<form  name="listform" method="POST" >

		{{ csrf_field() }}
		{{-- <div class="container"> --}}


		{{-- <button type="submit" name="_method" value="GET" 
		onclick="javascript: form.action='/resellers/edit/'+document.listform.radio_user_selected.value;" 
		class="button is-info">
		modify
	</button>
	
	<button type="submit" name="_method" value="GET" onclick="javascript: form.action='/resellers/'+document.listform.radio_user_selected.value;" class="button is-dark" value="view">
		view
	</button>
	
	<button type="submit" name="_method" value="DELETE" onclick="javascript: form.action='/resellers/'+document.listform.radio_user_selected.value;"  class="button is-danger" > 
		delete
	</button> --}}


	

	<a href="/resellers/create" class="button is-success is-pulled-right"> Create Reseller</a>

	{{-- <hr> --}}
	{{-- <table class="table is-striped is-bordered" >
		<thead> 
			<tr> 
				<th></th>
				<th>name</th> 
				<th>address</th>
			</tr>
		</thead>

		<tbody>
			@foreach($resellers as $user)
			<tr>

				<div class="control"> 
					<td>
						<label class="radio">							
							<input type="radio" id="radio_user_selected" name="user_selected" value="{{$user->id}}">							
						</label> 
					</td>

					<td>  {{$user->name}}   </td>
				</div>
				
				<td>
					{{$user->address}}
				</td>	
			</tr> 
			@endforeach
		</tbody>

	</table>
	--}}
	<div class="card">
		
		<div class="columns is-multiline">

			@foreach($resellers as $user)

			<div class="column is-one-half">

				{{-- <div class="card"> --}}
					{{-- <div class="card-image is-small"> --}}
						<figure class="image is-48x48" style="height: 100px; width: 100px">
							<img src={{$faker->imageUrl(400, 300,'people')}} alt="Placeholder image">
						</figure>
					{{-- </div> --}}
				{{-- </div>	 --}}



  {{-- <div class="card-image">
    <figure class="image is-4by3">
      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
    </figure>
</div> --}}




{{-- <div class="media"> --}}
		{{-- <div class="media-left">
			<figure class="image is-128x12	8">
				<img src='http://lorempixel.com/96/96/' alt="Placeholder image">
			</figure>
		</div> --}}
		{{-- <div class="media-content"> --}}

			<p class="title is-5 has-text-dark">
				
							{{-- <label class="radio">							
								<input type="radio" id="radio_user_selected" name="user_selected" value="{{$user->id}}">							
							</label>  --}}
							{{-- <div class= "coulmn is-one-quarter"> --}}
							<div class="card-header-title"> {{$user->name}} </div>
					
					</p>
					{{-- <div class="card"> --}}
						<p class="subtitle is-6 has-text-dark">id = {{ $user->id }}</p>
						<p>{{$user->email}} </p>

						Lorem ipsum dolor sit amet <a>@bulmaio</a>.
						<a href="#">#css</a> <a href="#">#responsive</a>
						<br>
						<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
						</a>


					<footer class="card-footer">
						@can('crud-reseller',$user)

						<button type="submit" name="_method" value="DELETE" onclick="javascript: form.action='/resellers/'+{{$user->id}};"  
							class=" button is-danger is-small is is-pulled-right card-footer-item " > 
							delete
						</button>

						<button type="submit" name="_method" value="GET" onclick="javascript: form.action='/resellers/'+{{$user->id}};" 
							class=" button is-dark is-small is-pulled-right card-footer-item" value="view">
							view
						</button>

						<button type="submit" name="_method" value="GET" 
						onclick="javascript: form.action='/resellers/edit/'+{{$user->id}};" 
						class="button is-info is-small is-pulled-right card-footer-item" style="margin-left: 10px">
						modify
					</button>


					@endcan
				</footer>
			{{-- </div> --}}



			@endforeach
		</div> 
	</div>
</div>
{{-- <show-reseller :reseller="{{  json_encode($resellers) }}"></show-reseller> --}}

<!-- Submit button to be added. Axios request Post Method to ResellerController Create -->

{{-- </div> --}}

</form>


{{-- </div> --}}


@endsection


