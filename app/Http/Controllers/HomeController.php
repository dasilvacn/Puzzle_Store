<?php
namespace App\Http\Controllers;

class HomeController extends Controller {

    public function index(){
        return view('users.index');
    }
    public function thousandPieces(){
        return view('pages.1000pieces');
    }
    public function mailView()
    {
        return view('email.register-mail');
    }


}
