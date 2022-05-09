<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['product' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->search . '%')
            ->orwhere('category', 'like', '%' . $req->search . '%')->get();

        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    function cartItem()
    {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            return Cart::where('user_id', $userId)->count();
        }
    }
    function cartList()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*')
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    function cartDelete($id)
    {
        Cart::where('product_id', $id)->delete();
        return redirect()->back();
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    function orderPlace(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|min:5|max:100',
            'payment' => 'required'
        ]);        
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->products_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = "pending";
            $order->payment_method = $validated['payment'];
            $order->payment_status = "pending";
            $order->address = $validated['address'];
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect()->back();
    }

    function orders()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('orders')
            ->join('products', 'orders.products_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $products]);
    }
}
