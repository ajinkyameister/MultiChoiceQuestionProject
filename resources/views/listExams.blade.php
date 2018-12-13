@extends ('layouts.app')


@section('mainbody')


			@foreach($exams as $exam)

				<li> <a href=exams/{{$exam->id}}> {{$exam->name}}</a> </li> 

			@endforeach

				 
@endsection