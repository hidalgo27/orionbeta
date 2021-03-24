<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){

//        $productos = Product::with('categorias')->get();

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


    public function formulario(Request $request){
        $from = "hidalgochponce@gmail.com";
        $name = $request->sendername;
        $email = $request->emailaddress;
        $asunto= $request->sendersubject;
        $sendermessage = $request->sendermessage;

        try {
            Mail::send(['html' => 'notifications.page'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('Orion Super Mercados')
                    /*->attach('ruta')*/
                    ->from('info@orion.com.pe', 'Orion Super Mercados');
            });

            Mail::send(['html' => 'notifications.admin'], [
                'name' => $name,
                'email' => $email,
                'asunto' => $asunto,
                'sendermessage' => $sendermessage,
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'Orion Super Mercados')
                    ->subject('Orion Super Mercados')
//                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@orion.com.pe', 'Orion Super Mercados');
            });


            return redirect(route('contacto'))->with('status', 'Registro satisfactorio.');

        }
        catch (Exception $e){
            return $e;
        }
//        return view('page.index');
    }

    public function subscribete(Request $request){

        $alumnos = new Suscripcion();
        $alumnos->email = $request->input('email');
        $alumnos->save();

        return redirect(route('home'))->with('suscripcion', 'Gracias por su suscripción.');

//        return view('page.home')->with('status', 'Successfully updated video');;
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
