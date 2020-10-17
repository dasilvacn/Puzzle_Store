<?php
namespace App\Http\Controllers;

use App\Product;
use App\User;

class HomeController extends Controller {

    public function index(){
        $products = Product::where('category','=','1000pieces')->get();
        return view('users.index', compact('products'));
    }
    public function thousandPieces(){
        $products = Product::where('category','=','1000pieces')->get();
        return view('pages.1000pieces',compact('products'));
    }
    public function mailView()
    {
        return view('email.register-mail');
    }
    public function cartView(){
        return view('users.cart');
    }


}
