@extends('layouts.app')


@section('mainbody')


	<div id="app">
		
			<form method="POST" action="/exams" >

				{{csrf_field()}}

				<label> Standard:</label>
				<input id="standard_name" type="text" name="standard_name" value="{{$standard->name}}" > 
				<br> <br>

				<input id="standard_id" type="hidden" name="standard_id" value="{{$standard->id}}" > 

				<label> Exam Name:</label>
				<input id="exam_name" type="text" name="exam_name"> <br> <br>

				<button type="submit" class="button is-success">Submit</button>
				<button class="button" >Cancel</button>
						
			</form>	





	</div>


		

@endsection
	