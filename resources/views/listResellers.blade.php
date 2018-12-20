
@extends('layouts.app')

@section('top')

@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')

<a href="/resellers/create" class="button is-success"> Create Reseller</a>

<a  class="button is-info" onclick="javascript:location.href='resellers/edit/'+document.listform.radio_user_selected.value"> Modify Reseller</a>

<a  class="button is-dark" onclick="javascript:location.href='resellers/'+document.listform.radio_user_selected.value"> View Reseller</a>

	<a  class="button is-danger" data-method="delete" onclick="javascript:location.href='resellers/'+document.listform.radio_user_selected.value"> Delete Reseller</a>


<form name="listform" method="POST" >

	{{ csrf_field() }}

	{{ method_field('DELETE') }}
	
<button class="button is-primary"  onclick="javascript:location.href='resellers/'+document.listform.radio_user_selected.value">Using Button to delete</button>

<div id="app" class="section" >		
	<table class="table is-striped" >
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


