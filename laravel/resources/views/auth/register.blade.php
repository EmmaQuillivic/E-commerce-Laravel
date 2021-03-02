@extends('layouts.app')

@section('content')
<div class="container_re">
	<h2> Sign up for free ! </h2><br>
  <form method="POST" action="{{ route('register') }}">
    @csrf

		<fieldset>
      <label for="firstname">{{ __('firstname :') }}</label>
			<input id="firstname" type= "text" class="form @error('firstname') is-invalid @enderror" name="firstname" size="20" value="{{ old('firstname') }}" placeholder="Firstname" required autocomplete="firstname" autofocus>
			@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

			<label for="lastname">{{ __('lastname :') }}</label>
	    <input id="lastname" type= "text" class="form @error('lastname') is-invalid @enderror" name="lastname" size="30" value="{{ old('lastname') }}" placeholder="Lastname" required autocomplete="lastname">
			@error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

			<label for="email">{{ __('E-Mail Address :') }}</label>
			<input id="email" type= "Email" class="form @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email">
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

      <label for="password">{{ __('Password :') }}</label>
  		<input id="password" type= "Password" class="form @error('password') is-invalid @enderror" name= "password" placeholder="Password" required autocomplete="new-password">
			@error('password')
      	<span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
    	  </span>
      @enderror

      <label for="password-confirm">{{ __('Confirm Password :') }}</label>
    	<input id="password-confirm" type= "Password" class="form" name= "password_confirmation" placeholder="Enter your password again" required autocomplete="new-password"> <br> <br>

		</fieldset>
    <p class="p_register">By clicking on Sign up, you agree to BeautyBob's Term and conditions of use.</p>

    <div id="button">
		 <input type="submit" class="Bouton" value="SIGN UP">
   </div>

   <div class="trait"></div>
  </form>
  <div class="zone_t">
  	<div id="text_1">
   		You have an account ? <br><br>
  		<a href="{{ route('login') }}"><button type="button" class="Bouton">LOG IN</button></a>
   	</div>
  </div>
</div>
@endsection
