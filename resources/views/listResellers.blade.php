
@extends('layouts.app')

@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')




	{{-- <a  class="button is-danger"  onclick="javascript:location.href='resellers/'+document.listform.radio_user_selected.value"> Delete Reseller</a> --}}


<form  name="listform" method="POST" >

	{{ csrf_field() }}
<div class="container">


	<button type="submit" name="_method" value="GET" 
			onclick="javascript: form.action='/resellers/edit/'+document.listform.radio_user_selected.value;" 
			class="button is-info">
		modify
	</button>
	
	<button type="submit" name="_method" value="GET" onclick="javascript: form.action='/resellers/'+document.listform.radio_user_selected.value;" class="button is-dark" value="view">
		 view
	</button>
	
	<button type="submit" name="_method" value="DELETE" onclick="javascript: form.action='/resellers/'+document.listform.radio_user_selected.value;"  class="button is-danger" > 
		delete
	</button>

	<a href="/resellers/create" class="button is-success is-pulled-right"> Create Reseller</a>

 		<hr>
	<table class="table is-striped is-bordered" >
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
	{{-- <show-reseller :reseller="{{  json_encode($resellers) }}"></show-reseller> --}}

	<!-- Submit button to be added. Axios request Post Method to ResellerController Create -->

</div>

</form>

@endsection


