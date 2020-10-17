<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Helpers\UploadPaths;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function adminPanel()
    {
        return view('auth.login');
    }
    public function indexView()
    {
        return view('layouts.admin-master');
    }
    public function adminsView()
    {
        $users = User::where('deleted_at','=',null)->get();
        return view('yonetimPaneli.admins',compact('users'));
    }
    public function delete($id)
    {
        // DB::table('users')->where('id','=',$id)->delete(); // Hard delete ile veriyi kalıcı siler. TAVSİYE EDİLMEZ!
        DB::table('users')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now()
        ]);
        return 'Başarıyla Silindi';
    }
    public function deleteProduct($id)
    {
        // DB::table('users')->where('id','=',$id)->delete(); // Hard delete ile veriyi kalıcı siler. TAVSİYE EDİLMEZ!
        DB::table('products')->where('id','=',$id)->update([
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
        $products = Product::all();
        return view('yonetimPaneli.productsList',compact('products'));
    }
    public function ordersView()
    {
        return view('yonetimPaneli.orders');
    }
    public function register(){
        return view('yonetimPaneli.register');
    }
    public function productCreateView()
    {
        return view('yonetimPaneli.productAdd');
    }

    public function productCreate(Request $request)
    {
        $name = $request->get('name');
        $category = $request->get('category');
        $price = $request->get('price');
        $filePhotoUrl = $request->file('photo');
        $user = User::find(1);

        if (isset($filePhotoUrl)) {
            $productPhotoName = uniqid('product_'). '.' . $filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'), $productPhotoName);
        }

        Product::create([
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'photo' => $productPhotoName,
            'is_approve' => false,
            'created_by' => $user->id,
            'updated_by' => $user->id
        ]);

        return back();
    }


}
