<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\productModel;
use App\Models\loginModel;
use App\Models\Cart;
use App\Models\Order;
use Session;

class productController extends Controller
{
    public function products(){
        $products = productModel::all();
        return view('product', ['product'=>$products]);
    }

    public function productDetails($id){
        $product = productModel::find($id);
        return view('details',['id'=>$product]);
    }

    public function cart(Request $req, $id){
        if($req->session()->has('user')){
            $product = productModel::find($id);
            $c = new Cart;
            $c->itemid = $id;
            $c->userid = $req->session()->get('user')['id'];
            $c->quantity = $req->quantity;
            $c->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function loginUser(Request $req){

        $user = loginModel::where('email', '=', $req->email)->first();
        
        if($user && Hash::check($req->password, $user->password)){
            $req->session()->put('user', $user);
            return redirect('/');
        }else{
            return 'Invalid email or password';
        }
    }

    public static function viewCart(){
        if( Session::has('user')){
            $user = Session::get('user')['id'];
            $total = Cart::where('userid', $user)->count();
            return $total;
        }else{
            return "0";
        }
        
    }

    public function gotoCart(){
        $user = Session::get('user')['id'];
        $cart = Cart::join('product', 'cart.itemid', '=', 'product.id')
            ->where('cart.userid', $user)
            ->select('cart.quantity','cart.id', 'product.name', 'product.price', 'product.gallery')
            ->get();

        return view('addtocart',['cart'=>$cart]);
    }

    public function removeCart($id){
        Cart::destroy($id);
        return redirect('/cart');
    }

    public function order(){
        $user = Session::get('user')['id'];
        $cart = Cart::join('product', 'cart.itemid', '=', 'product.id')
            ->where('cart.userid', $user)
            ->select('cart.quantity', 'product.price')
            ->get();

        static $total = 0;     
        foreach($cart as $c){
            $total += $c['quantity'] * $c['price'];
        }    
        return view('order',['total'=>$total]);
    }

    public function makeOrder(Request $req){
        $user = Session::get('user')['id'];
        $cart = Cart::where('userid', $user)->get();

        
        foreach($cart as $c){
            $o = new Order;
            $o->productid = $c['itemid'];
            $o->userid = $user;
            $o->address = $req->address;
            $o->save();
        }
        Cart::where('userid', $user)->delete();
        return redirect('/');
        
    }

    public function myOrders(){
        $user = Session::get('user')['id'];
        $orders = Order::join('product', 'order.productid', '=', 'product.id')
            ->where('order.userid', $user)
            ->get();
        return view('orderDetails',['orders'=>$orders]);
    }
    
}
