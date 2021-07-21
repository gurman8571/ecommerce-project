<html>
<link rel="icon" type="image/png"  href="img/favicon.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
*{
  font-family: 'Staatliches', cursive;
}
img{
    width:10%;
}
#h0{
    position: absolute;
    right:20%;
}
#h2{
    position: absolute;
    left:50%;
}
#button:hover{
  transform: scale(1.5);
  transition-property:transform;
  transition-duration:0.9s;
  border:0.9px solid #90EE90;
  background:none;

}
#button{
  border:none;
  width:20%;
  height:40px;
  BACKGROUND-color:#90EE90;
  border-radius:10px;

}
#hi{
    width:50%;
    position:absolute;
    left:25%;
    top:1%;
    bottom:10%;

}
h1{
    margin:5px;
    padding:5px;
    text-align:center;
}

</style>
<h1>Cart</h1>
<div class="container">
<table class="table" width:50%>
<div class="container">
  <thead class="thead-light">
    
  </thead>
  <tbody>
  @if($products->count())
  @foreach($products as $item)
    <tr>
      <th scope="row">{{$item->category}}</th>
     
      <td>{{$item->name}}</td>
      <td id="h2">{{$item->price}}</td>
      <td id="h3"><img src="{{$item->gallery}}" alt=""></td>
      <td id="h0"> <a href="removecart/{{$item->cart_id}}"><button type="submit" class="btn btn-outline-danger">remove from cart</button></td></a>
    </tr>
    @endforeach

  </tbody>
  
</table>
<a href="order" id="orderbutton"><button id="button">order now</button></a>
<a href="orderpaytm" id="orderbutton"><button id="button">order via paytm</button></a>


</div>
@else
    <img  id="hi"src="img/2eacfa305d7715bdcd86bb4956209038.png" alt="">
    @endif
</html>