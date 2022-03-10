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
                <div class="col-lg-4 my-4">
                    <div class="sec-4-box-2">
                        <div class="product">
                            <a href="#">
                                <img src="{{ asset('img/banner/newarival-2.png') }}" alt="">
                            </a>
                            <div class="product-text text-center">
                                <a href="#">
                                    <h4 class="mt-2">Product Name</h4>
                                </a>
                                <h4><strong>50 ৳</strong></h4>
                                <div class="btn my-3">
                                    <a href="">Add to Cart</a>
                                    <a href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="sec-4-box-2">
                        <div class="product">
                            <a href="#">
                                <img src="{{ asset('img/banner/newarival-2.png') }}" alt="">
                            </a>
                            <div class="product-text text-center">
                                <a href="#">
                                    <h4 class="mt-2">Product Name</h4>
                                </a>
                                <h4><strong>50 ৳</strong></h4>
                                <div class="btn my-3">
                                    <a href="">Add to Cart</a>
                                    <a href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="sec-4-box-2">
                        <div class="product">
                            <a href="#">
                                <img src="{{ asset('img/banner/newarival-2.png') }}" alt="">
                            </a>
                            <div class="product-text text-center">
                                <a href="#">
                                    <h4 class="mt-2">Product Name</h4>
                                </a>
                                <h4><strong>50 ৳</strong></h4>
                                <div class="btn my-3">
                                    <a href="">Add to Cart</a>
                                    <a href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="sec-4-box-2">
                        <div class="product">
                            <a href="#">
                                <img src="{{ asset('img/banner/newarival-2.png') }}" alt="">
                            </a>
                            <div class="product-text text-center">
                                <a href="#">
                                    <h4 class="mt-2">Product Name</h4>
                                </a>
                                <h4><strong>50 ৳</strong></h4>
                                <div class="btn my-3">
                                    <a href="">Add to Cart</a>
                                    <a href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="sec-4-box-2">
                        <div class="product">
                            <a href="#">
                                <img src="{{ asset('img/banner/newarival-2.png') }}" alt="">
                            </a>
                            <div class="product-text text-center">
                                <a href="#">
                                    <h4 class="mt-2">Product Name</h4>
                                </a>
                                <h4><strong>50 ৳</strong></h4>
                                <div class="btn my-3">
                                    <a href="">Add to Cart</a>
                                    <a href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="sec-4-box-2">
                        <div class="product">
                            <a href="#">
                                <img src="{{ asset('img/banner/newarival-2.png') }}" alt="">
                            </a>
                            <div class="product-text text-center">
                                <a href="#">
                                    <h4 class="mt-2">Product Name</h4>
                                </a>
                                <h4><strong>50 ৳</strong></h4>
                                <div class="btn my-3">
                                    <a href="">Add to Cart</a>
                                    <a href="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop end -->
@endsection


