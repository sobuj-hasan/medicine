@extends('layouts.app')
@section('title', 'New Arrivals Details')
@section('content')
    <div class="productdetails">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="productdetailsbox-1">
                    <img src="{{ asset('assets/img/') }}/{{ $singleproduct->image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="productdetailsbox-2">
                    <h2>Price:</h2>
                    <h3>$ {{ $singleproduct->price }}</h3>
                    <div class="adcartbox d-flex">
                        <h5>ADD TO CART</h5>
                        <input type="number" placeholder="ADD TO CART">
                    </div>
                    <a href=""><button>BUYNOW</button></a>
                    <h5>
                        Shipping:
                        Delivery within Worldwide
                    </h5>
                    <h5>
                        Delivery:
                        Estimated between Sat Feb and Tue 28 Mar
                    </h5>
                    <div class="prodtlsbox d-flex">
                        <h6>
                            Payments:
                        </h6>
                        <a href=""><img src="{{ asset('img/logo/bks.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('img/logo/nagad.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('img/logo/rocket.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('img/logo/mastercard.png') }}" alt=""></a>
                    </div>
                    <h5>
                        Return:
                        {{ $singleproduct->return_policy }} days
                    </h5>
                    <h5>
                        Seller:
                        SEXMEDICINEBD
                    </h5>
                    <div class="cldgn">
                        <h5>
                            <img src="{{ asset('img/logo/phone.png') }}" alt="">
                            01717763415
                        </h5>
                    </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="pb-4">Description</h3>
                    <p>{{ $singleproduct->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection


