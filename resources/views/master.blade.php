<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>E-Comm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Optional theme -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}


</body>
<style>
    .custom-login {
        min-height: 500px;
        padding-top: 100px;
    }
    .slider-img{
        height: 400px!important;
    }

    .carousel-caption{
        border-radius: 20px;
        background-color: #232e235c!important;
    }

    /* .custom-product{
        min-height: 600px;
    } */

    .trending-image{
        height: 100px;
    }

    .trending-item{
        float: left;
        width: 25%;;
    }
    
    .trending-wrapper{
        margin: 30px;
        
    }

    .custom-detail{
        margin: 50px;
    }

    .detail-img{
        height: 300px;
    }
    .searched-item{
        float: left;
        width: 25%;
    }
    .cart-items{
        display: flex;
        justify-content: center;
        align-items: center;    
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .cart-delete{
        display: flex;
        justify-content: flex-end;
    }
    #total-price>td{
        border-top: 1px solid black;
        font-weight: bold;
    }
    .order-items{
        display: flex;
        margin:20px 0;
        align-items: center;
    }
</style>

</html>
