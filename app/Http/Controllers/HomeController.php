<?php
namespace App\Http\Controllers;

class HomeController extends Controller {

    public function index(){
        return view('users.index');
    }
    public function indexView(){
        return view('home');
    }


}
