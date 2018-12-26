
@extends('layouts.app')

@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')




{{-- <a  class="button is-danger"  onclick="javascript:location.href='resellers/'+document.listform.radio_user_selected.value"> Delete Reseller</a> --}}


<form  name="listform" method="POST" >

	{{ csrf_field() }}
	<div class="container">


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
	
	<div class="columns is-multiline">
		@foreach($resellers as $user)
		<div class="column is-full">
			<div class="box">
  {{-- <div class="card-image">
    <figure class="image is-4by3">
      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
    </figure>
</div> --}}
<div class="card-content">
	<div class="media">
		<div class="media-left">
			<figure class="image is-48x48">
				<img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
			</figure>
		</div>
		<div class="media-content">
			<p class="title is-5">
				<a href="/resellers/edit/{{$user->id}}">

					{{-- <label class="radio">							
						<input type="radio" id="radio_user_selected" name="user_selected" value="{{$user->id}}">							
					</label>  --}}



					{{$user->name}}

					
					
				

				

				<button type="submit" name="_method" value="DELETE" onclick="javascript: form.action='/resellers/'+{{$user->id}};"  class="button is-danger is-small is is-pulled-right " > 
					delete
				</button>
				<button type="submit" name="_method" value="GET" onclick="javascript: form.action='/resellers/'+{{$user->id}};" class="button is-dark is-small is-pulled-right" value="view">
					view
				</button>
				<button type="submit" name="_method" value="GET" 
					onclick="javascript: form.action='/resellers/edit/'+{{$user->id}};" 
					class="button is-info is-small is-pulled-right " style="margin-left: 10px">
					modify
				</button>


			</a>
		</p>
		<p class="subtitle is-6">@johnsmith</p>
	</div>
</div>

<div class="content">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Phasellus nec iaculis mauris. <a>@bulmaio</a>.
	<a href="#">#css</a> <a href="#">#responsive</a>
	<br>
	<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
</div>
</div>
</div>

</div>
@endforeach
</div> 
{{-- <show-reseller :reseller="{{  json_encode($resellers) }}"></show-reseller> --}}

<!-- Submit button to be added. Axios request Post Method to ResellerController Create -->

</div>

</form>

@endsection


