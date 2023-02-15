<?php

use App\HTTP\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  
    <a class="navbar-brand" href="/">FINNEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorders">Orders</a>
        </li>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </ul>
      
      <ul class="nav navbar-nav navbar-right nav-size">
        <li class="crt-st"><a class="cart-style" href="/cartlist" >Cart({{$total}})</a></li>
        @if(Session::has('user'))
        <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle link-style" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">{{Session::get('user')['name']}}</button>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="cart-style" href="/logout">&nbsp; &nbsp;Logout</a></li>
          </ul>
        </div>
        @else
        &nbsp;&nbsp;&nbsp;
        <a class="link-style2" href="/login" >Login</a>
        &nbsp;&nbsp;&nbsp;
        <a class="link-style2" href="/register" >Register</a>
        @endif
        </li>
        
      </ul>
      </div>
    </div>
  </nav>