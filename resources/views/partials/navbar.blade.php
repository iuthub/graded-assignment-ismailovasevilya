<div id="myDIV" class="header">
	@if(!Auth::check())
	<div class="beInRow">
		<input form="loginForm" placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
		
		@error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror


		<input form="loginForm" placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password"/>
		@error('password')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
		
		<form class="log" id="loginForm" method="POST" action="{{ route('login') }}">
			@csrf
			<input type="submit" class="addBtn" value="{{ __('Login') }}" />
	    </form>


		<a href="{{route('register')}}" class="addBtn">Register</a>


	@else


	
		<form class="log" id="logoutForm" method="POST" action="{{ route('logout') }}">
			@csrf
			<input type="submit" class="addBtn" value="{{ __('Logout') }}"/>
			
			
		</form>

	{{-- @include('tasks.task') --}}
@endif

</div>

