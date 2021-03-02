@extends('layouts.app')

@section('content')
<div class="container_res">
  <div class="cont-header">
	   <h1> Password Reset </h1>
  </div>
  <div class="cont-body">
    <h4> Enter the email address that you used to register. We'll send you an email with your username and a link to reset your password. </h4>
	  <form method="POST" action="{{ route('password.email') }}">
       @csrf
		   <fieldset>
			   <label for="email">{{ __('E-Mail Address :') }}</label>
				 <input id="email" type="email" class="form @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
		   </fieldset><br>
       <div id="button">
		       <input type="submit" class="Bouton" value="SEND">
       </div>
       <div class="Help">
         If you still need help, you can contact us <a id="mail" href="mailto:quilli_e@etna-alternance.net"> here. </a>
       </div>
    </form>
  </div>
</div>
@endsection
