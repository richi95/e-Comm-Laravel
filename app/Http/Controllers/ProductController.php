<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
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
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    function cartItem()
    {
        if(Session::has('user'))
        {
            $userId=Session::get('user')['id'];
            return Cart::where('user_id', $userId)->count();            
        }
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*')
        ->get();

        return view('cartlist', ['products'=>$products]);
    }

    function cartDelete($id)
    {
        Cart::where('product_id',$id)->delete();
        return redirect()->back();
    }


}
