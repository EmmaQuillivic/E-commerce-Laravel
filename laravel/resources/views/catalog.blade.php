@extends('layouts.app')

@section('content')
<script src="{{ asset('js/cookie.js') }}" defer></script>
<div class="container_catalog">
    <div class="titre_catalog">
      Bob's collection
    </div>
    @if(Session::has('message'))
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">
        <img class="arrow" src="/img/icone-logo/delete.png"></img>
      </span>
      <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <div class="catalog">
      <div class="pict">
        <div class="ligne">
          @forelse($products as $product)
          <article>
            <input id="id" name="id" type="hidden" value="{{ $product->id }}">
            <input id="Number_products" name="Number_products" type="hidden" value="1">
            <input type="submit" onclick="AddProduct('{{ $product->id }}','{{ $product->Name }}', '{{ $product->Image }}', '{{ $product->Price }}', '{{ Auth::user()->id }}')" class="button_catalog" value="ADD TO BAG">
            <a href="{{ url('product/'.$product->id) }}">
              <img class="img_catalog" src="{{ asset('storage/img/bob/'. $product->Image) }}" draggable="false">
              <p id="name" class="p_des"> {{ $product->Name }} </p>
              <p id="price" class="p_price">{{ $product->Price }}$</p>
            </a>
          </article>
          @empty
            <p>No Products found in here.</p>
          @endforelse
        </div>
      </div>
    </div>
    <div id='cookie_container' hidden>
      <div id="txt_cookie">
        This website uses cookies to ensure you get the best experience on our website.
        <input id="button_cookie" onclick="CookieAgree()" type="submit" value="Got it !"></span>
      </div>
    </div>
</div>
@endsection
