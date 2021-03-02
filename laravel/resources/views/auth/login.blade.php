@extends('layouts.app')

@section('content')
<div class="container_l">
  <h2> Log to your account ! </h2><br>
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <fieldset>
      <label for="email">{{ __('E-Mail Address :') }}</label>
      <input id="email" type="email" class="form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email" autofocus>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

      <label for="password">{{ __('Password :') }}</label>
      <input id="password" type="password" class="form-password @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

    </fieldset>
    <div class="link">
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
      @endif
    </div>

    <div id="button">
      <input type="submit" class="Bouton" value="{{ __('LOGIN') }}">
    </div>

    <div class="trait"></div>
  </form>
  <div class="zone_t">
    <div id="text_1">
      You don't have an account ? <br><br>
      <a href="{{ route('register') }}"><button type="button" class="Bouton">SIGN UP</button></a>
    </div>
  </div>
</div>
@endsection
