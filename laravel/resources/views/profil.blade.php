@extends('layouts.app')

@section('content')
<div class="container_profil">
        <div class="titre_profil">
          Your Profil :
        </div>
        @if (Auth::user()->country == null)
        <div class="profil">
          <div class="container_left">
            <div class="info">
              <div class="picture">
                @if (Auth::user()->Image != null)
                  <img class="profil" src="{{ asset('storage/img/user/' . Auth::user()->Image) }}" draggable="false"></img>
                  <p> Do you want to change your profil picture ?</p>
                @else
                  <p> Add a profile picture ! <p>
                @endif
                  <form class="pict" enctype="multipart/form-data" action="{{ route('update_picture') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="file" name="Image" accept="image/*">
                    <input type="submit" value="EDIT">
                  </form>
              </div>
              <div class="user">
                  <p class="first">Your Name : {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
              </div>
              <div class="user">
                <p id="option">Your Email : </p>
                <p id="user"> {{ Auth::user()->email }}</p>
              </div>
              @if (Auth::user()->country != null)
              <div class="user">
                <p id="option">Your Address : </p>
                <p id="user">{{ Auth::user()->country }}, {{ Auth::user()->city }}, {{ Auth::user()->address }}</p>
              </div>
              @endif
          </div>
        </div>
        <div class="container_right">
              <form class="profil" enctype="multipart/form-data" action="{{ route('add_address') }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="profiledit">
                  <div class="tittle">
                    <label>Please enter your delivery address</label>
                  </div>

                  <label for="country">Country</label>
                  <input class="form" placeholder="France" type="text" name="country" required>

                  <label for="city">City</label>
                  <input class="form" placeholder="Ivry Sur Seine" type="text" name="city" required>

                  <label for="address">Address</label>
                  <input class="form" placeholder="Avenue De La République" type="text" name="address" required>
                </fieldset>
                <div id="button">
                  <input class="Bouton" type="submit" value="ADD">
                </div>
              </form>
        </div>
        @else
        <div class="profil_2">
          <div class="container_left_bis">
            <div class="info">
              <div class="picture">
                @if (Auth::user()->Image != null)
                  <img class="profil" src="{{ asset('storage/img/user/' . Auth::user()->Image) }}"></img>
                  <p> Do you want to change your profil picture ?</p>
                @else
                  <p> Add a profile picture ! <p>
                @endif
                <form class="pict" enctype="multipart/form-data" action="{{ route('update_picture') }}" method="POST">
                  @csrf
                  @method('PUT')
                  <input type="file" name="Image" accept="image/*">
                </form>
              </div>
              <div class="user">
                  <p class="first">Your Name : {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
              </div>
              <div class="user">
                <p id="option">Your Email : </p>
                <p id="user"> {{ Auth::user()->email }}</p>
              </div>
              @if (Auth::user()->country != null)
              <div class="user">
                <p id="option">Your Address : </p>
                <p id="user">{{ Auth::user()->country }}, {{ Auth::user()->city }}, {{ Auth::user()->address }}</p>
              </div>
              @endif
          </div>
        </div>
        @endif
      </div>

</div>
@endsection
