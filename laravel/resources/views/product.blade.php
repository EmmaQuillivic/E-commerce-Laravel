@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">
    <img class="arrow" src="/img/icone-logo/delete.png"></img>
  </span>
  <p>{{ Session::get('message') }}</p>
</div>
@endif
<div class="container_product">
    <div class="product">
      <div class="photo_product">
        <img src="{{ asset('storage/img/bob/' . $product->Image) }}">
      </div>
      <div class="texte_product">
        <div class="name_product">
          {{ $product->Name }}
        </div>
        <div class="price_product">
          <div class="text">
          Price of the product: {{ $product->Price }}$
          </div>
        </div>
        <div class="color_product">
          <div class="text">
            Color: {{ $product->Available_Colors }}
          </div>
        </div>
        <div class="size_product">
          <div class="text">
            Size: {{ $product->Available_Size }}
          </div>
        </div>
        @if (auth()->user()->admin == '1')
        <div class="size_product">
          <div class="text">
            Qty available: {{ $product->Quantity }}
          </div>
            <form action="{{ url('/product/update/'.$product->id) }}" method="POST">
              @csrf
              @method('PUT')
              <input type="number" class="qty" id="quantity" name="quantity" min="0" value="{{ $product->Quantity }}">
              <input class="send" type="submit" value="EDIT">
            </form>
        </div>
        @endif
        <div class="size_product">
          <label for="Number_products">{{ __('Qty :') }}</label>
          <input type="number" class="qty" id="Number_products" name="Number_products" min="1" max="{{ $product->Quantity }}" value="1">
        </div>
        <div id="button">
          <input type="submit" onclick="AddProduct('{{ $product->id }}','{{ $product->Name }}', '{{ $product->Image }}', '{{ $product->Price }}', '{{ Auth::user()->id }}')" class="Bouton" value="ADD TO BAG">
        </div>
    </div>
</div>
@endsection
