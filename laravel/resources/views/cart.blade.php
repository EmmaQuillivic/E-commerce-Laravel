@extends('layouts.app')

@section('content')
<script src="{{ asset('js/cart.js') }}" defer></script>
<script src="{{ asset('js/order.js') }}" defer></script>
<div id="container_cart" class="container_cart">
    <div class="panier">
      <div class="tableau">
        <p id="caption">YOUR SHOPPING BAG</p>
        <table id="table">
        </table>
        <input id="user_id" type="hidden" value="{{ Auth::user()->id }}">
      </div>
      <div class="total">
        <p id="p_title-order"> ORDER SUMMARY </p>
        <div class="div_total">
          <p id="p_option"> 0 items</p>
          <p id="p_total">0$</p>
        </div>
        <div class="div_total">
          <p id="p_option">Delivery</p>
          <p id="p_total">Free</p>
      </div>
      <div class="div_total" style="border-bottom: 1px solid #ddd;">
        <p id="p_option2">Total</p>
        <p id="p_total2">0$</p>
      </div>
      <div id="button_cart">
  		 <input onclick="order()" id="order" class="Bouton" value="CHECK-OUT">
     </div>
   </div>
  </div>
</div>
@endsection
