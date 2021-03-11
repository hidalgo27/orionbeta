<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if ($request->session()->has('cart')) {
            return response()->json($request->session()->get('cart'));
        }else{
            return response()->json();
        }
    }
    public function storeSessionData(Request $request){
        if ($request->cart){
            $cart = $request->session()->put('cart', $request->cart);
            return $cart;
        }
    }

    public function deleteSessionData(Request $request){
        $request->session()->forget('cart');
        echo "Data eliminado";
    }

    //product
    public function getSessionDataProd(Request $request){
        if ($request->session()->has('products')) {
            return response()->json($request->session()->get('products'));
        }else{
            return response()->json();
        }
    }
    public function storeSessionDataProd(Request $request){
        if ($request->products){
            $products = $request->session()->put('products', $request->products);
            return $products;
        }
    }

    public function deleteSessionDataProd(Request $request){
        $request->session()->forget('products');
        echo "Data eliminado";
    }
}
