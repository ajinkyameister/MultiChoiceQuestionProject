<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<ul>

			@foreach($resellers as $reseller)

			<li> <a href="#"> {{$reseller->name}}</a> </li>

			@endforeach	



		</ul>
	</div>
</body>
</html>