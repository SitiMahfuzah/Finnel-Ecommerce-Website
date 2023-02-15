@extends('master')
@section("content")
<div class="container">
    <div class="row">

        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}">
        </div>

        <div class="col-sm-6">
            <a href="/">Back</a><br><br>
            <h2>{{$product['name']}}</h2>
            <h5>Price: ${{$product['price']}}</h5>
            <h5>Details: {{$product['description']}}</h5>
            <h5>Category: {{$product['category']}}</h5>
            <br><br>
            <form action="/add_to_cart" method="POST"> 
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="button-4">Add to cart</button>

            </form>
            <br>
            <button class="button-5">Buy Now</button>
            <br><br>


        </div>

    </div>

</div>
      

@endsection