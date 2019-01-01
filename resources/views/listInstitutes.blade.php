
@extends('layouts.app')

@section('top')
	@component('components.topnavbar') @endcomponent

@endsection

@section('mainbody')


<section> 

<form  name="listform" method="POST" >

	{{ csrf_field() }}
	<div class="container">


		<button type="submit" name="_method" value="GET" 
		onclick="javascript: form.action='/institutes/edit/'+document.listform.radio_institute_selected.value;" 
		class="button is-info">
		modify
	</button>
	
	<button type="submit" name="_method" value="GET" onclick="javascript: form.action='/institutes/'+document.listform.radio_institute_selected.value;" class="button is-dark" value="view">
		view
	</button>
	
	<button type="submit" name="_method" value="DELETE" onclick="javascript: form.action='/institutes/'+document.listform.radio_institute_selected.value;"  class="button is-danger" > 
		delete
	</button>

	<a href="/institute/create" class="button is-success is-pulled-right"> Create Institute</a>

	<hr>
	<table class="table is-striped is-bordered" >
		<thead> 
			<tr> 
				<th></th>
				<th>name</th> 
				{{-- <th>address</th> --}}
			</tr>
		</thead>

		<tbody>
			@foreach($institutes as $institute)
			<tr>

				<div class="control"> 
					<td>
						<label class="radio">							
							<input type="radio" id="radio_institute_selected" name="institute_selected" value="{{$institute->id}}">							
						</label> 
					</td>

					<td>  {{$institute->name}}  </td>
				</div>
							
			</tr> 
			@endforeach
		</tbody>

	</table>

</div>

</form>

{{-- <modifyinstitute :institute="{{  json_encode($institutes) }}"> </modifyinstitute> --}}

<!-- Submit button to be added. Axios request Post Method to ResellerController Create -->
</section>
{{-- </div> --}}
@endsection

