<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        return view('page.index', compact('user'));
    }
    public function platzi(){
        return view('page.platzi');
    }
    public function detailProduct(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $id = $request->id;
        return view('page.detailProduct', compact('id', 'user'));
    }
    public function categoryProduct(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $id = $request->id;
        return view('page.gridProduct', compact('id', 'user'));
    }
    public function checkout(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        return view('page.checkout', compact('user'));
    }



    public function json(Request $request){
//        $form=$request->form_data;
        $cart=$request->cart;
        foreach($cart as $cart_){
            return $cart_['name'];
        }
//        return $form['celular'];
    }
}
