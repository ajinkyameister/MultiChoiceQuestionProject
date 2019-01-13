@php

$homeIsActive = '';
$aboutIsActive = '';

if(Route::currentRouteName() == 'home') $homeIsActive = 'is-active';
if(Route::currentRouteName() == 'about') $aboutIsActive = 'is-active';

@endphp
{{-- dsdasdasdasdasdasdasdasd --}}
<div class="container" >
	<nav class="navbar is-transparent nav panel" role="navigation" aria-label="main navigation">
		<div class="navbar-brand" >
			<a class="navbar-item has-text-dark" href="/">
				MCQ Project
			</a>

			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu" >
			<div class="navbar-start">
				<a class="navbar-item has-text-dark" href="/home" >

					<span class="icon is-small"><i class="fas fa-home" aria-hidden="true"></i></span>
					&nbsp;		Home 

				</a>

				<a class="navbar-item is-hoverable has-text-dark" href="/about" >
					<span class="icon is-small" ><i class="fas fa-image" aria-hidden="true"></i>
					</span>
					&nbsp;		About Us
				</a>

				@if(Auth::check())
				<div class="navbar-item has-dropdown is-hoverable has-text-dark" >

					<a class="navbar-link is-hoverable">
						<span>
							<i class="fas fa-unlock-alt fa-fw" aria-hidden="true"> 
							</i>
							Administration
						</span>
					</a>
					
					<div class="navbar-dropdown" >
						@if(auth()->user()->role=='superAdmin')
						<a href="/resellers" class="navbar-item "  >
							<span>
								<i class="fa fa-user-tie fa-fw" aria-hidden="true"> 
								</i> &nbsp Reseller
							</span>							
						</a>

						@endif

						<a href ="/institutes" class="navbar-item " >
							<span>
								<i class=" fa fa-school fa-fw" aria-hidden="true"> 
								</i> &nbsp Institute
							</span>
						</a>			

						<a class="navbar-item">
							<span>
								<i class="fa fa-user-graduate fa-fw" aria-hidden="true"> 
								</i> &nbsp Student
							</span>
						</a>
						<a class="navbar-item has-text-dark">
							<span>
								<i class="fa fa-list-ol fa-fw" aria-hidden="true">  
								</i> &nbsp Audit Log
							</span>
						</a>
						<hr class="navbar-divider">
						<a class="navbar-item">
							<span>
								<i class="fa fa-bug" aria-hidden="true">  </i> 
								&nbsp Report an issue
							</span>
						</a>
						
					</div>
				</div>
				@endif
			</div>

			{{-- CODE ADDED --}}





			{{-- CODE ENDED --}}



			<div class="navbar-end has-text-dark" >
				@if(Auth::check())

				<a class="navbar-item" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();" >
				<span class="icon is-small"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span>
				<span>Logout</span>
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>


			<span class="navbar-item has-text-dark" > Hi,{{ Auth::user()->name }} </span>

			@endif   
		</div> 

	</div>

</nav>
</div>

	<div class="content has-text-dark">
		<div class="columns is-mobile is-multiline">
			<div class="column is-half">
				<nav class="breadcrumb has-succeeds-separator is-pulled-left" 
					 aria-label="breadcrumbs">
					<ul>
						@php
						$createBreadcrums=[];
						@endphp
						@for($i =1	; $i <= count(Request::segments()); $i++)	
						@php 
						$createBreadcrums[$i] = Request::segment($i);
						$createRouteFromBreadcrums = implode('/', $createBreadcrums);
						@endphp
						<li> 		 
							
							
          					
          					{{-- <a href="{{Route::currentRouteName()}}">  	  --}}
								<a href="{{$createRouteFromBreadcrums}}">
									<span class="icon is-small">
										@if(Request::segment($i)=='resellers')
											<i class="fas fa-user" aria-hidden="true"></i>
										@elseif(Request::segment($i)=='institutes')
											<i class="fas fa-school" aria-hidden="true"></i>
										@elseif	(Request::segment($i)=='home')
											<i class="fas fa-home" aria-hidden="true"></i>
										@elseif	(Request::segment($i)=='about')
											<i class="fas fa-image" aria-hidden="true"></i>
										@endif	
									</span>
									 <p>{{ucfirst(Request::segment($i))}}</p>
								</a>


								{{-- @elseif(Request::segment($i)==='about') --}}
								{{-- <a href="/about"><li > {{"About Us"}}</li></a> --}}
								{{-- @elseif(Request::segment($i)==='home') --}}
								{{-- <a href="/home"><li>  {{"Home"}}</li> </a> --}}
								{{-- @elseif(Request::segment($i)==='institutes') --}}
								{{-- <a href="/institutes"> <li>{{"Institutes"}} </li>	</a> --}}
								{{-- @endif --}}
							{{-- </a>  --}}
						</li>
						{{-- @if($i < count(Request::segments()) & $i > 0) --}}
						{{-- {!!'<i class="fa fa-angle-right"></i>'!!} --}}
						{{-- @enif --}}
						@endfor


					</ul>	

	
				</nav>
			</div>
		</div>
	</div>
{{-- asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdas --}}

