<html>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="icon" type="image/png"  href="img/favicon.png">
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
.alert-success{
    text-align:center;
}
hr{
    line-height:1.5;
    color:black;
}
.container
{
border:1px solid grey;
margin-top:15px;
border-radius:10px;
}
.st{
    color:red;
}
</style>
<br><br>
<h1>My Orders</h1>

<br><br>
@if($orders->count())
  @foreach($orders as $item)
  <div class="container" >

<br>     
       <h4>PRODUCT:{{$item->name}}</h4>
       <br>
    <h5>   PRICE:{{$item->price}}</h5>
    <br>
       <img src="{{$item->gallery}}" alt="">
       <br>
      <H5> ADRESS TO BE DELIVERED:{{$item->address}}</H5>
      <br>
     <H5> DELIVER TO: MR.{{$item->user_name}}</H5>
     <h5 class="st">DELIVERY STATUS:pending</h5>
     </div>
   <br>

     @endforeach
   
     @else
     <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">NO orders!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>

 @endif
 
  


   

 
</div>
</html>