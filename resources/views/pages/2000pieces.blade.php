@extends('layouts.main')
@section('content')

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product_grid">
                        <!-- Product -->
                        <div class="product">
                            @foreach($products as $product)
                                @if($product->category = '2000pieces')
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('/uploads/products/').'/'.$product->photo}}" alt="{{$product->name}}"></div>
                                    <div class="card-body">
                                        <div class="card-text"><a href="{{asset('pages.1000pieces')}}">{{$product->category}}</a></div>
                                        <div class="card-footer">{{$product->price}}</div>
                                        <a href="#" class="btn-primary "><i class="fas fa-shopping-cart"></i>Sepete Ekle</a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- Product -->
                        <!-- Product -->
                        <!-- Product -->
                        <!-- Product -->
                        <!-- Product -->
                        <!-- Product -->


                    </div>
                </div>
            </div>
        </div>

@endsection
