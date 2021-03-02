@extends('admin.app')

@section('content')
@if(Session::has('product'))
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">
    <img class="arrow" src="/img/icone-logo/delete.png"></img>
  </span>
  <p>{{ Session::get('product') }}</p>
</div>
@endif
<div class="container_admin">
  <h2 class="admin"> Add a product </h2>
  <form method="POST" action="{{ url('/admin/product/add') }}" enctype="multipart/form-data">
    @csrf
	  <fieldset>
		    <label for="name">{{ __('Name :') }}</label>
				<input id="name" name="name" class="form @error('name') is-invalid @enderror" type= "text" size="40" placeholder="Name and description" required autocomplete="name">
        @error('name')
   			  <span class="invalid-feedback" role="alert">
   					<strong>{{ $message }}</strong>
   				</span>
   			@enderror

        <label for="color">{{ __('Color :') }}</label>
  	    <input id="color" name="color" class="form @error('color') is-invalid @enderror" type= "text" min="0" placeholder="Color(s) of the product" required autocomplete="color">
        @error('color')
   			  <span class="invalid-feedback" role="alert">
   					<strong>{{ $message }}</strong>
   				</span>
   			@enderror

        <label for="size">{{ __('Size :')}}</label>
  		  <input id="size" name="size" class="form @error('size') is-invalid @enderror" type= "text" min="0" placeholder="Size(s) of the product" required autocomplete="size">
        @error('color')
   			  <span class="invalid-feedback" role="alert">
   					<strong>{{ $message }}</strong>
   				</span>
   			@enderror

        <label for="price">{{ __('Price :') }}</label>
  		  <input id="price" name="price" class="form @error('price') is-invalid @enderror" type= "number" min="0" placeholder="Price of the product" required autocomplete="price">
        @error('price')
   			  <span class="invalid-feedback" role="alert">
   					<strong>{{ $message }}</strong>
   				</span>
   			@enderror

        <label for="picture">{{ __('Picture :')}}</label><br><br>
  		  <input id="picture" name="picture" class="picture @error('picture') is-invalid @enderror" type= "file" accept="image/*" required multiple><br><br>
        @error('name')
   			  <span class="invalid-feedback" role="alert">
   					<strong>{{ $message }}</strong>
   				</span>
   			@enderror

        <label for="quantity">{{ __('Quantity :') }}</label>
  		  <input id="quantity" name="quantity" class="form @error('quantity') is-invalid @enderror" type= "number" min="0" placeholder="Quantity of the product" required autocomplete="quantity">
        @error('quantity')
   			  <span class="invalid-feedback" role="alert">
   					<strong>{{ $message }}</strong>
   				</span>
   			@enderror

		 </fieldset>
    <div id="button">
       <input type="submit" class="Bouton" value="SUBMIT">
    </div><br>
  </form>
</div>
@endsection
