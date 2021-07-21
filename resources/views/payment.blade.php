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
    position: absolute;
    right:20%;
}
#h2{
    position: absolute;
    left:50%;
}
h1{
    text-align:center;
}
td{
    font-weight:800;
}

</style>
<h1>ORDER DETAILS</h1>
<div class="container">
<table class="table">
  <br><br>
  <tbody>
    <tr>
      <th scope="row">AMOUNT</th>
      <td> RS.{{$total}}</td>
    </tr>
    <tr>
      <th scope="row">TAXES</th>
      
      <td>RS.0</td>
    </tr>
    <tr>
      <th scope="row">DELIVERY CHARGES</th>
     
      <td>RS.50</td>
    </tr>
    <tr>
      <th scope="row">AMOUNT TO BE PAID</th>
     
      <td>RS.{{$total+50}}</td>
    </tr>
  </tbody>
</table>



  </tbody>
</table>
</div>
<br>
<div class="container">

<form action="paymentdone" method="POST">
@csrf
  <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="address"placeholder="enter address" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">phone no</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="mobile" name="phone" required>
  <br>
  <br>
  <input type="radio"  name="method" value="online">
<span>online</spanl><br>
<input type="radio" id="css" name="method" value="cod">
<span>cod</span><br>

<br>
 
  <button type="submit" class="btn btn-success">PLACE ORDER-cash-on delivery</button>

</form>


</div>

</html>