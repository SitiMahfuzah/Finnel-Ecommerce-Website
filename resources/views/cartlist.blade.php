@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Products in cart</h4>
            <br>
            <a class="button-5" href="ordernow">Order Now</a>

            @foreach($products as $item)
            <div class=" row searched-item cart-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4 cart-style-1">
                    <div class="">
                      <h2 class="cart-text">{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
            
             <div class="col-sm-3 cart-style-1">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          

     </div>
</div>
@endsection 