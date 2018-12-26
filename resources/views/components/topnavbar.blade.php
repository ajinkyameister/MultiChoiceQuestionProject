@php

$homeIsActive = '';
$aboutIsActive = '';

if(Route::currentRouteName() == 'home') $homeIsActive = 'is-active';
if(Route::currentRouteName() == 'about') $aboutIsActive = 'is-active';

@endphp
{{-- dsdasdasdasdasdasdasdasd --}}
<div class="container">
<nav class="navbar nav" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="/">
			MCQ Project
		</a>

		<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>

	<div id="navbarBasicExample" class="navbar-menu">
		<div class="navbar-start">
			<a class="navbar-item" href="/home">

				<span class="icon is-small"><i class="fas fa-home" aria-hidden="true"></i></span>
				&nbsp;		Home

			</a>

			<a class="navbar-item" href="/about">
				<span class="icon is-small"><i class="fas fa-image" aria-hidden="true"></i></span>
				&nbsp;		About Us
			</a>

			@if(Auth::check())
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
					Administration
				</a>

				<div class="navbar-dropdown">
					@if(auth()->user()->role=='superAdmin')
						<a href="/resellers" class="navbar-item">
							Reseller
						</a>
					@endif
					<a href ="/institutes" class="navbar-item">
						Institute
					</a>					
					<a class="navbar-item">
						Student
					</a>
					<a class="navbar-item">
						Audit Log 
					</a>
					<hr class="navbar-divider">
					<a class="navbar-item">
						Report an issue
					</a>
				</div>
			</div>
			@endif
		</div>



		<div class="navbar-end">
			@if(Auth::check())

			<a class="navbar-item" href="{{ route('logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
			<span class="icon is-small"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span>
			<span>Logout</span>
		</a>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>


		<span class="navbar-item "> Hi,{{ Auth::user()->name }} </span>
		
		@endif   
	</div> 
	
</div>

</nav>
</div>

{{-- asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdas --}}

