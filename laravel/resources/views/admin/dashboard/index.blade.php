@extends('admin.app')

@section('content')
<script src="{{ asset('js/admin_order.js') }}" defer></script>
<div class="container_index">
  <div class="container_content">
    <div class="column">
      <p class="welcome">Welcome to the administrator page !</p>
      <p class="text">You can check the products and the users in the menu at your left or watch our biggets orders $_$ </p>
      <div class="contents">
        <div class="number_order">
          <p class="caption">Number of Orders</p>
          <span class="span" id="number_orders"></span>
        </div>
        <div class="big_order">
          <p class="caption">Biggest Order</p>
          <span class="span" id="price"></span>
        </div>
      </div>
      <input class="bouton refresh" type="submit" onclick="Biggest_order(), orders()" value="Refresh">
    </div>
  </div>
</div>
@endsection
