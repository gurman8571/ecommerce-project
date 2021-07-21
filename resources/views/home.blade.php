<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/png"  href="img/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>e-cart</title>
</head>
<style>
body{
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
    .containe{
        display:flex;
    flex-direction:row;
        justify-content:space-between;
    }
    .containe{
      margin:50px;
      padding:30px;
      text-align:center;
    }
    img{
        width:33%;
    }
    .users{
        margin:5px;
        
    }
    #back{
      margin:7px;
      padding:7px;
    }
    #icon{
      line-height:1.5;
      color:black;
    }
    .header{
        text-align:center;
        font-family: 'Staatliches', cursive;
    }
    .img{
      width:50%;
    }
    .card{
      margin:7px;
      padding:7px;
      text-align:center;
      border-radius:15px;
    }
    .hi{
      font-family: 'Staatliches', cursive;
    }
    .slider{
      position:relative;
      width:100%;
    
     
   
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
    height: 80px;
    width: 30px;
    outline: black;
    background-color:black;
   
  padding:10px;
    border: none;
    
}
.d-block{
  
  height:500px;
  width:500px;
}
   .showed{
     width:10%;
   }
   .card-img-top
{
  width:30%;
  margin-left:30%;

}
.navbar-expand{
  font-family: 'Staatliches',cursive;
}
@media only screen and (max-width: 1000px) {
  .btn-danger,.btn-success{
    position:absolute;
   left:10%;
  }
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
      <li class="nav-item active">
        <a class="nav-link " href="profile">Profile</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search">
      <input class="form-control mr-sm-2" type="search"name="results" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<br>


@if(session()->has('username'))
<h1 class="header"> 
HELLO,{{session('username')}}
</h1>
@endif


<div class="slider">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="category"><img class="d-block w-100 " src="img/iphone_11_featured.jpg" alt="First slide"></a>
    </div>
    <div class="carousel-item">
     <a href="categorylcd"> <img class="d-block w-100" src="img/smart_tv_deals_lg_50_inch-1-6804f72.jpg" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
      <a href="categoryaudio"><img class="d-block w-100" src="img/kH7CnFDRxZUsKCcwBTuoge.jpg" alt="Third slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br>  
  <h3 class="hi">Trendy Items</h3>
  <br>
<div class="containe">
<?php 
$count=0;      
?>
  @foreach($data as $item)
 
<?php
 if ($count==4) {
            continue;
}



?>   
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$item['name']}}</h5>
        <h6 class="card-title">{{$item['description']}}</h6>
        <div class="hide"> details <img  class="showed"src="img/eye-look.svg" alt=""></div>
    <a href="detail/{{$item['id']}}" class="btn btn-primary">shop now</a>
  </div>
</div>
<?php 
  $count++;   
?>
  @endforeach
  </div>

@if(session()->has('username'))
  <a class="btn btn-danger" href="logout" role="button">logout</a>
  @endif

  @if(session()->missing('username'))
  <a class="btn btn-success" href="/" role="button">login</a>


@endif

 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

$("h6").css("display","none");
$('.hide').click(function () {
  $('h6').toggle();
});




  </script>
</body>
</html>
