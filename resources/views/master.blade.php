<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finnel</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>

</head>
<body>

    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
        margin-left: 500px;
    }

    .button-4 {
    appearance: none;
    background-color: #FAFBFC;
    border: 1px solid rgba(27, 31, 35, 0.15);
    border-radius: 6px;
    box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
    box-sizing: border-box;
    color: #24292E;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
    list-style: none;
    padding: 6px 16px;
    position: relative;
    transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
    white-space: nowrap;
    word-wrap: break-word;
    }

    .button-4:hover {
    background-color: #F3F4F6;
    text-decoration: none;
    transition-duration: 0.1s;
    }

    .button-4:disabled {
    background-color: #FAFBFC;
    border-color: rgba(27, 31, 35, 0.15);
    color: #959DA5;
    cursor: default;
    }

    .button-4:active {
    background-color: #EDEFF2;
    box-shadow: rgba(225, 228, 232, 0.2) 0 1px 0 inset;
    transition: none 0s;
    }

    .button-4:focus {
    outline: 1px transparent;
    }

    .button-4:before {
    display: none;
    }

    .button-4:-webkit-details-marker {
    display: none;
    }

    .button-5 {
    appearance: none;
    background-color: #F8C8DC;
    border: 1px solid rgba(27, 31, 35, 0.15);
    border-radius: 6px;
    box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
    box-sizing: border-box;
    color: #24292E;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
    list-style: none;
    padding: 6px 16px;
    position: relative;
    transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
    white-space: nowrap;
    word-wrap: break-word;
    text-decoration:none;
    }

    .button-5:hover {
    background-color: #F8C8DC;
    text-decoration: none;
    transition-duration: 0.1s;
    }

    .button-5:disabled {
    background-color: #FAFBFC;
    border-color: rgba(27, 31, 35, 0.15);
    color: #959DA5;
    cursor: default;
    }

    .button-5:active {
    background-color: #EDEFF2;
    box-shadow: rgba(225, 228, 232, 0.2) 0 1px 0 inset;
    transition: none 0s;
    }

    .button-5:focus {
    outline: 1px transparent;
    }

    .button-5:before {
    display: none;
    }

    .button-5:-webkit-details-marker {
    display: none;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .carousel-size {
            height:400px;
            background-color: transparent;
        }

        .pos1 {
            margin-right:400px;
            padding-left: 100px !important;
        }

        img.slider-img {
            height:400px !important;
            margin-left: 550px;

        }
        
        .ctrl-color {
          background-color: black;
          opacity: 0.5;
        }

        .desc-box{
            color: black; 
        }

        .custom-product {
            height:900px;
        }

        .img-trend {
            height: 100px;
            margin-left:80px;
        }

        .trending-item {
            float: left;
            width:20%; 
        }

        .trending-wrapper {
            margin: 60px;
        }

        .detail-img {
            height:400px;
        }

        .txt-style {
            color: black;
            text-decoration:none;
            text-align: center;
        }

        .name-font {
            font-size: 20px;
        }

        .cart-style {
            text-decoration:none;
            color: grey;
            margin-bottom: 0;
            text-align:center;
           
        }

        .cart-style:hover {
        color: black;
        text-decoration: none;

        }

        .crt-st {
            margin-top:6px;
        }

        .link-style {
            background-color: transparent;
            border:none;
            color: grey;
        }

        .link-style:hover{
            background-color: transparent !important;
            border:none;
            color:black;
        }

        .link-style:active{
            background-color: transparent;
            border:none;
            color:black;
        }

        .link-style2 {
            background-color: transparent;
            border:none;
            color: grey;
            margin-top: 6px !important;
            text-decoration: none;
           
        }

        .link-style2:hover{
            background-color: transparent !important;
            border:none;
            color:black;
        }

        .link-style2:active{
            background-color: transparent;
            border:none;
            color:black;
        }

        .cart-divider {
            border-bottom:1px !important;
            
        }

        .trending-image {
            height: 150px;
            width:100px;
        }

        .cart-text {
            font-size: 24px;
        }

        .cart-style-1 {
            padding-top:20px;
        }

        .order-class {
            margin-left: 50px;
        }

        .order-table {
            margin-left: 50px;
            margin-top: 50px;
            width: 700px;
        }

        .pay-style {
            font-size: 30px;
            text-align: center;
            padding-top: 20px;
        }

        .add-style {
            width: 500px;
        }

        .cart-style-2 {
            font-weight:thin;
            font-size: 16px;
        }
        





</style>
</html>

