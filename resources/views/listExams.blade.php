@extends ('layouts.app')


@section('mainbody')

		<h1>	{{$standardName}} </h1>

			@foreach($exams as $exam)


				<li> <a href=exams/{{$exam->id}}> {{$exam->name}}</a> </li> 

			@endforeach

				 
@endsection