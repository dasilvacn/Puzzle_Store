<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function indexView()
    {
        return view('layouts.admin-master');
    }
    public function adminsView()
    {
        $admins = Admin::where('deleted_at','=',null)->get();
        return view('yonetimPaneli.admins',compact('admins'));
    }
    public function adminAddView()
    {
        return view('yonetimPaneli.adminAdd');
    }
    public function adminAdd(Request $request)
    {
        $data = $request->all();
        $password =$request->get('password');

        //$users = User::all();
        DB::table('admins')->insert([
            'name' => $request->get('name'),
            'password' => Hash::make($password),
            'yetki' => $request->get('yetki'),
            'siparisYonetim' => $request->get('siparisYonetim'),
            'uyeYonetimi' => $request->get('uyeYonetimi'),
            'urunYonetimi' => $request->get('urunYonetimi')
        ]);
        return view('yonetimPaneli.adminAdd');
    }
    public function delete($id)
    {
        // DB::table('users')->where('id','=',$id)->delete(); // Hard delete ile veriyi kalıcı siler. TAVSİYE EDİLMEZ!
        DB::table('admins')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now()
        ]);
        return 'Başarıyla Silindi';
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
    public function register(){
        return view('yonetimPaneli.register');
    }

}
