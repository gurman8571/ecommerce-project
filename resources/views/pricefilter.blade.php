<?php
 use App\Http\controllers\food;
$total=food::cartitem();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/png"  href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
*{
  font-family: 'Staatliches', cursive;
}
.user{
    text-align:center;
    position:absolute;
    left:10%;
    top:5%;
}

body{
    margin:7px;
    padding:5px;
    }
    .container{
        display:flex;
    flex-direction:column;
        justify-content:space-around;
        
    }
    img{
        width:10%;
    }
    .users{
        margin:5px;
        
    }
    .c{
      border:1px solid grey;
      border-radius:12px;
      padding:10px;
      margin:5px;
      padding-left:20px;
    }
   .cart{
     width:4%;
     position:fixed;
   }
   .total{
     position:fixed;
     color:white;
     background-color:red;
     border-radius:50%;
     left:4.2%;
     top:17.1%;
     width:1.3%;
     text-align:center;
    
   }
#dropdownMenuLink{
  left:20%;
  position:absolute;
}
</style>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ECART</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="layout">products</a>
      </li>
      <li class="nav-item  active dropdown">
       
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="category">Smart Phones</a>
          <a class="dropdown-item" href="categoryaudio">Audio</a>
          <a class="dropdown-item" href="categorymachine">Machines</a>
          <a class="dropdown-item" href="categorylcd">LCD/LED</a>
          <div class="dropdown-divider"></div>
     
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="myorders">myorders</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search">
      <input class="form-control mr-sm-2" type="search"name="results" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit">Search</button>
    </form>
  </div>
</nav>
@if(session('productid'))

  <div class="alert alert-primary" role="alert">
 product added to cart
</div>
@endif

<br>
<br>
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 price
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="pricefilterdesc">high to low</a>
    <a class="dropdown-item" href="pricefilteraesc">low to high</a>
   
  </div>
</div>
<br>
</h1>

<div>
@yield('content')
</div>    
</body>
<a href="cart"><img  class="cart"src="img/cart.svg" alt="" ><p class="total">{{$total}}</p></a>

<br>
<div class="container">
@foreach($data as $item)
<div class="c">
<img class="image" src="{{$item->gallery}}" alt="Card image cap">
<h2>{{$item->name}}</h2>
 <br>
   
    <p >{{$item->description}}</p>
   <h6> Price: {{$item->price}}</h6>
  
<form action="addtocart" method="POST">
@csrf
<input type="hidden" name="productid" value="{{$item->id}}">
<button type="submit" class="btn btn-danger">ADD TO CART</button>
    </form>
    </div>
    <br>
@endforeach

<br>
<br>
<br>
  

<br>
<br>
</html>