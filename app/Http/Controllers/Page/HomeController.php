<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $category = Category::where('state', '1')->get();
        return view('page.index', compact('user', 'category'));
    }

    public function detailProduct(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $id = $request->id;
        $category = Category::where('state', '1')->get();
        return view('page.detailProduct', compact('id', 'user', 'category'));
    }
    public function categoryProduct(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        $name_category = $request->id;
        return view('page.gridProduct', compact('name_category', 'user', 'category'));
    }
    public function checkout(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.checkout', compact('user','category'));
    }

    public function faq(){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.faq', compact('user','category'));
    }

    public function about(){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.about', compact('user','category'));
    }

    public function contacto(){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.contact', compact('user','category'));
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
