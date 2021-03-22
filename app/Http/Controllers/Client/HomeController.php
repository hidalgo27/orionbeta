<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.client.dashboard', compact('user','category'));
    }

    public function pedidos(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.client.pedidos', compact('user', 'category'));
    }
    public function history(Request $request){
        if (Auth::user()){
            $user = Auth::user();
        }else{
            $user = 0;
        }
        $category = Category::where('state', '1')->get();
        return view('page.client.history', compact('user','category'));
    }

}
