<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\payment;
use App\Models\customer;
use App\Models\comment;
use App\Models\paytm;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class food extends Controller
{
    function login(request $req)
    {
        $data=$req->input('username');
       $customer=customer::where(['email'=>$req->email])->first();
       if ( !$customer || !Hash::check($req->password,$customer->password))
        {
           
        return back()->withErrors(['wrong username or password','wrong username or password']);                 
       }
       else {
        

       $req->session()->put('username',$customer->name);
        return redirect('home');
       } 
    }
    function list()
{
    $data=product::all();
    return view('layout',['data'=>$data]);
}
function category()
{
    $dat= DB::table('products')
    ->where('category','MOBILE')
    ->get();
    return view('category',['dat'=>$dat]);
}
function categoryaudio()
{
    $dat= DB::table('products')
    ->where('category','AUDIO')
    ->get();
    return view('category',['dat'=>$dat]);
}
function categorylcd()
{
    $dat= DB::table('products')
    ->where('category','lcd')
    ->get();
    return view('category',['dat'=>$dat]);
}
function categorymachine()
{
    $dat= DB::table('products')
    ->where('category','MACHINES')
    ->get();
    return view('category',['dat'=>$dat]);
}
function home()
{
    $data=product::all();
    return view('home',['data'=>$data]);
}
function search( request $req)
{
   $data= product::where('name' ,'like','%'.$req->input('results').'%') -> get();
   
    return view('search',['data'=>$data]);    
  
 
}
function detail($id)
{
    
   $data=product::find($id);
   return view('detail',['item'=>$data]);  
}
function addtocart( request $req)
{
    if ($req->session()->has('username')) {
        $cart=new cart;
        $cart->user_name=$req->session()->get('username');
        $cart->product_id=$req->productid;
        $cart->save();
      
        return redirect('layout');
        $data=$req->input();
        $req->session->flash('productid',$data['productid']);
    }
else {
   return redirect('/');
}
}

 static function cartitem()
{
$userid=session()->get('username');
return cart::where('user_name',$userid)->count();
return redirect('layout');

}
function cartlist( )
{
    $userid=session()->get('username');
$products=DB::table('carts')
->join('products','carts.product_id',"=",'products.id')
->where('carts.user_name',$userid)
->select('products.*','carts.id as cart_id')
->get();
return view('cart',['products'=>$products]);
}

function removecart($id)
{
  cart::destroy($id);
return redirect ('cart');
}
function order()
{
    $userid=session()->get('username');
 $total= $products=DB::table('carts')
->join('products','carts.product_id',"=",'products.id')
->where('carts.user_name',$userid)
->sum('products.price');

return view('payment',['total'=>$total]);
}


function paymentdone(request $req)
{
    if($req->method=='online')
    {
        {
            $userid=session()->get('username');
            $allcart=cart::where('user_name',$userid)->get();
            foreach ($allcart as $cart) {
                
                $paytm=new paytm;
                $paytm->address=$req->address;
                $paytm->phone_no=$req->phone;
                $paytm->product_id=$cart['product_id'];
                $paytm->user_name=$cart['user_name'];
                
             cart::where('user_name',$userid)->delete();  
               
               
                $paytm->save();
            }
              
                return view('paytm.payment');   
        
        }
            
    }

    $userid=session()->get('username');
    $allcart=cart::where('user_name',$userid)->get();
    foreach ($allcart as $cart) {
        
        $payment=new payment;
        $payment->address=$req->address;
        $payment->phone_no=$req->phone;
        $payment->product_id=$cart['product_id'];
        $payment->user_name=$cart['user_name'];
        $payment->method=$req->method;
     cart::where('user_name',$userid)->delete();  
       
       
        $payment->save();
    }
      
        return view('final');   


}
function myorders()
{
    
    $userid=session()->get('username');
  $orders= DB::table('payment')
   ->join('products','payment.product_id',"=",'products.id')
   ->where('payment.user_name',$userid)
   ->get();
   return view('myorders',['orders'=>$orders]);
      
}



function regis(request $req)
{
    
       $custo=customer::where(['email'=>$req->email])->first();
       if ($custo)
        {
           
        return back()->withErrors(['email taken']);  
        }
           else {
        $customer=new customer;
        $customer->name=$req->username;
        $customer->email=$req->email;
        $customer->password=Hash::make($req->password);
        $customer->save();
        return view('register');
           }
}
function costfilterdesc()
{
    $data= DB::table('products')
    ->orderBy('price','DESC')
    ->get();
    return view('pricefilter',['data'=>$data]);
}
function costfilteraesc()
{
    $data= DB::table('products')
    ->orderBy('price','ASC')
    ->get();
    return view('pricefilter',['data'=>$data]);
}
function comment(request $req)
{
    if ($req->session()->has('username')) {
        $comment=new comment;    
        $comment->username=$req->session()->get('username');
        $comment->comment=$req->comment;
        $comment->save();
      
        return redirect('layout');
       
    }
else {
   return redirect('/');
}

}
function paytmpayment()
{
    $userid=session()->get('username');
    $allcart=cart::where('user_name',$userid)->get();
    foreach ($allcart as $cart) {
        
        $paytm=new paytm;
        $paytm->address=$req->address;
        $paytm->phone_no=$req->phone;
        $paytm->product_id=$cart['product_id'];
        $paytm->user_name=$cart['user_name'];
        
     cart::where('user_name',$userid)->delete();  
       
       
        $paytm->save();
    }
      
        return view('paytm.payment-page');   

}
function profile()
{
    $userid=session()->get('username');
$data=customer::where('name',$userid)->get();
    
return view('profile',['data'=>$data]);
}

}





