<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin-master');
    }
    public function adminsView()
    {
        return view('yonetimPaneli.admins');
    }
    public function usersView()
    {
        return view('yonetimPaneli.users');
    }
    public function categoryView()
    {
        return view('yonetimPaneli.categoryManagement');
    }
    public function productsView()
    {
        return view('yonetimPaneli.productsList');
    }
    public function ordersView()
    {
        return view('yonetimPaneli.orders');
    }
}
