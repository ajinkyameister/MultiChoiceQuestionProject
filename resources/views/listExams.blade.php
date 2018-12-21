@extends ('layouts.app')

@section('top')
@include('components.topnavbar')
@endsection


@section('mainbody')
<form name="createExam">

	<a class="button is-primary" onclick="
				 
				 	if(!document.createExam.standard_select.value)
							alert('please select standard');
					else{
						location.href='/standard/'+ document.createExam.standard_select.value +'/exams/create'	

					}">
		Create Exam
	</a>
					
	<a class="button is-dark">Modify Exam</a>
	<a class="button is-info">View Exam</a>
	<a class="button is-danger">Delete Exam</a>
	<br> <br>
	<table class="table is-narrow">
		<thead>
			<tr>
				<th>Standard</th>
				<th> Exam 1</th>
				<th> Exam 2</th>
				<th> Exam 3</th>
				<th> Exam 4</th>
				<th> Exam 5</th>
				<th> Exam 6</th>
				<th> Exam 7</th>
				<th> Exam 8</th>
				<th> Exam 9</th>
				<th> Exam 10</th>
				<th> Exam 11</th>
				<th> Exam 12</th>
				<th> Exam 13</th>
				<th> Exam 14</th>
				<th> Exam 15</th>
				<th> Exam 16</th>
				<th> Exam 17</th>

			</tr>
		</thead>
		<tbody>
			<tr> 
				<!-- <th> 1st</th>	 -->
				@foreach($standards as $standard)
				<tr>
					<td> <input type="radio" name="standard_select" value="{{$standard->id}}"> 
						{{$standard->name}} 
					</td>
					
					@foreach ($exams as $exam)

					@if($standard->id == $exam->standard_id)

					<td width="30px"> <input type="radio" name="exam_select" value="{{$exam->id}}"> 	{{$exam->name}} 
					</td>

					@endif	

					@endforeach	

				</tr>	
				@endforeach


			</tr>
		</tbody>

	</table>
</form>

@endsection	
