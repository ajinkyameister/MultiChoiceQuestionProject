	<form method="POST" action="{{ route('register') }}">
								@csrf

								<div class="field">
									<p class="control has-icons-left has-icons-right">
										<input class="input" id= "name" name="name" type="text" placeholder="Name" value="{{ old('name') }}" required>
										<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
										</span>
									</p>
								</div>	

								<div class="field" >
									<p class="control has-icons-left has-icons-right">
										<input id="email" name="email" class="input" type="email" placeholder="Email" value="{{ old('email') }}"required>
										<span class="icon is-small is-left">
											<i class="fas fa-envelope"></i>
										</span>
										
									</p>
								</div>
								<div class="field">
									<p class="control has-icons-left">
										<input id="password" name="password" class="input" type="password" placeholder="Password" required>
										<span class="icon is-small is-left">
											<i class="fas fa-lock"></i>
										</span>
									</p>
								</div>

								<div class="field">
									<p class="control has-icons-left">
										<input id="password-confirm" name="password_confirmation" class="input" type="password" placeholder="Confirm Password" required>
										<span class="icon is-small is-left">
											<i class="fas fa-lock"></i>
										</span>
									</p>
								</div>
								<div class="field">
									<p class="control ">
										<button class="button is-dark ">
											Register
										</button>
									</p>
								</div>

</form>                    			

