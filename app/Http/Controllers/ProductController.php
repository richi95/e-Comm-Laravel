<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index()
    {
        $data= Product::all();
        return view('product', ['product'=> $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like' ,'%'.$req->search.'%')
        ->orwhere('category', 'like' ,'%'.$req->search.'%')->get();
        
        return view('search', ['products'=> $data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')->id;
            $cart->product_id = $req->product_id;
            $cart->save();
            
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }
    function cartItem()
    {
        if(Session::has('user'))
        {
            $user_id=Session::get('user')['id'];
            return Cart::where('user_id', $user_id)->count();            
        }
    }
    function showCart()
    {
        
    }


}
