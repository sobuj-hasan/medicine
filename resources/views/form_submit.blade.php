@extends('layouts.app')
@section('title', 'Form Submit')
@section('content')
    <!-- contact page start -->
    <div class="contactpage text-center">
        <div class="container">
            <h2>Congrats Dear </h2>
            <h3 class="text-success mt-2">Successfully Submitted Your Message !</h3>
            <h4 class="mt-2">We will contact your email As soon as possible</h4>
            <div class="btn mt-5">
                <a class="btn btn-info" href="{{ route('index') }}"><strong>Back to Home</strong></a>
            </div>
        </div>
    </div>
    <!-- contact page end -->
@endsection