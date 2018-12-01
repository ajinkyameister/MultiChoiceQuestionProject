	<form method="POST" action="{{ route('login') }}">
		@csrf

		<div class="field">
			<p class="control has-icons-left has-icons-right">
				<input id="email" name="email" class="input" type="email" placeholder="Email"
					value="{{ old('email') }}">

				<span class="icon is-small is-left">
					<i class="fas fa-envelope"></i>
				</span>
				<span class="icon is-small is-right">
					<i class="fas fa-check"></i>
				</span>
			</p>
		</div>
		<div class="field">
			<p class="control has-icons-left">
				<input id="password" name="password" class="input" type="password" placeholder="Password" >
				<span class="icon is-small is-left">
					<i class="fas fa-lock"></i>
				</span>
			</p>
		</div>
		<div class="field">
			<p class="control ">
				<button class="button is-danger ">
					Login
				</button>
			</p>
		</div>

	</form> 

	