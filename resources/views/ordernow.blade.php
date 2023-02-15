@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <h4 class="pay-style">Payment</h4>
        <table class="table order-table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form class="order-class" action="/orderplace" method="POST" >
              @csrf
                <div class="form-group add-style">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                  <br>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Online banking FPX</span> <br> 
                  <input type="radio" value="cash" name="payment"> <span>Paypal</span> <br>
                  <input type="radio" value="cash" name="payment"> <span>Cash on Delivery (COD)</span> <br> 

                </div>
                <br>
                <button type="submit" class="button-4">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 