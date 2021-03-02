@extends('admin.app')

@section('content')
<div class="container_product">
  <div class="table">
    @if(Session::has('remove'))
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">
        <img class="arrow" src="/img/icone-logo/delete.png"></img>
      </span>
      <p class="remove">{{ Session::get('remove') }}</p>
    </div>
    @endif
    <table class="table">
      <caption class="caption">Online products</caption>
      @foreach($products as $product)
        <tr>
          <td class="td_photo"><img id="mini" src={{ asset('storage/img/bob/'. $product->Image) }}></td>
          <td class="td_title">{{ $product->Name }}</td>
          <td class="td_price">{{ $product->Price }}$</td>
          <td class="td_qty">{{ __('Qty :') }}
            <input type="number" class="qty" id="Number_products" name="Number_products" min="1" max="5" value="{{ $product->Quantity }}">
          </td>
          <td class="td_qty">Size : {{ $product->Available_Size }}</td>
          <form class="nothing" method="POST" action="{{ route('Productremove', ['id' => $product->id]) }}">
            @csrf
            <td class="td_qty">
              <button class="delete"></button>
            </td>
          </form>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
