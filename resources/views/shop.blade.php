@extends('layouts.app')
@section('title', 'Shop Page')
@section('content')
   <!-- shop start -->
    <div class="shop mx-auto">
        <style>
            .product {
                box-shadow: 0px 0px 2px 1px #333333;
            }
            .product img{
                max-height: 350px;
                border: none;
                box-shadow: none;
            }
            .product-text h4{
                font-size: 28px;
                font-weight: 600;
                color: #333333;
                text-transform: capitalize;
            }
            .product-text a{
                text-decoration: none;
            }
            .product-text .btn a{
                font-size: 18px;
                font-weight: 500;
                padding: 10px 20px;
                text-align: center;
                color: #ffffff;
                background: green;
                border-radius: 3px;
            }
        </style>
        <div class="container mb-5">
            <h1 class="text-center mb-3">Our Shop</h1>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 my-4">
                        <div class="sec-4-box-2">
                            <div class="product">
                                <a href="{{ route('product.details', $product->id) }}">
                                    <img src="{{ asset('assets/img/') }}/{{ $product->image }}" alt="">
                                </a>
                                <div class="product-text text-center">
                                    <a href="{{ route('product.details', $product->id) }}">
                                        <h4 class="mt-2">{{ $product->medicine_name }}</h4>
                                    </a>
                                    <h4><strong>{{ $product->price }} $</strong></h4>
                                    <div class="btn my-3">
                                        <a href="{{ route('product.details', $product->id) }}">Add to Cart</a>
                                        <a href="{{ route('product.details', $product->id) }}">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- shop end -->
@endsection


