@extends('layouts.admin-master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Ürün Ekleme </strong> Formu
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('yonetimPaneli.adminAdd')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleName">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Yetki</label>
                                    <input type="checkbox" name="yetki" value="1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Sipariş Yönetimi</label>
                                    <input type="checkbox" name="siparisYonetim" value="1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Üye Yönetimi</label>
                                    <input type="checkbox" name="uyeYonetimi" value="1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Ürün Yönetimi</label>
                                    <input type="checkbox" name="urunYonetimi" value="1" class="form-control">
                                </div>


                                @csrf
                                <input type="submit" class="btn btn-block btn-input au-btn--blue" value="Yükle"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
