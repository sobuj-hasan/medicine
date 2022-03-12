@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <!-- LOGIN PAGE START -->
    <div class="login-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 py-md-5 m-auto">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card login-card my-5">
                            <h3 class="text-center mt-5">Login</h3>
                            <h6 class="text-center mb-5">Only for admin login</h6>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="text" class="form-control custom-form-control placeicon" placeholder="Email Address" value="{{ old('email') }}" name="email">
                                @error('email')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="password" class="form-control custom-form-control placeicon" placeholder="Password" value="{{ old('password') }}" name="password">
                                @error('password')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                                <a class="d-flex justify-content-end fw-bolder text-white mt-2" href="#">Forget Password</a>
                            </div>
                            <div class="mt-3 text-center mb-5">
                                <button class="arabic-button text-white" type="submit" name="submit">Login</button>
                                {{-- <a class="d-flex justify-content-start fw-bolder text-white mt-2 ms-lg-5 mb-5" href="{{ route('register') }}">@lang('home.havent_any_account') <em>&nbsp; @lang('home.signup')</em></a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN PAGE END -->
    <style>
        /* ===========================
        Login Page css 
        =========================== */
        /* LOGIN PART */
        .login-part{
            background: #F2F2F2;
        }
        .login-card{
            background: #669933;
            border: none;
        }
        .login-card h3{
            color: #FFFFFF;
            font-size: 34px;
        }
        .login-card h6{
            color: #FFFFFF;
        }
        .login-card button {
            border: none;
            background: #336699;
            height: 50px;
            width: 83%;
            margin-left: 0px;
            border-radius: 5px;
            font-weight: 700;
            font-size: 22px;
            color: var(--wc);
        }
        .login-card p {
            color: #FFFFFF;
        }
        .login-card ul li {
            height: 30px;
            width: 30px;
            background: #FFFFFF;
            border-radius: 50px;
            line-height: 34px;
            text-align: center;
            margin: 0px 8px;
            font-size: 24px;
        }
        .login-card ul li a{
            color: #315db8;
        }
        .login-card .custom-form-control{
            height: 50px;
            font-weight: 600;
            font-size: 18px;
            color: var(--psb);
        }
        .login-card .custom-form-control::placeholder{
            font-weight: 600;
            font-size: 18px;
            color: var(--qs);
        }
        /* LOGIN PART END */

        /* =============================
        Register page css 
        ============================= */
        /* SIGN UP PART */
        .signin-part{
            background: #F2F2F2;
        }
        .signin-card{
            background: var(--bgc);
            border: none;
        }
        .signin-card h3{
            color: #FFFFFF;
            font-size: 34px;
        }
        .signin-card h6{
            color: #FFFFFF;
        }
        .signin-card p {
            color: #FFFFFF;
        }
        .signin-card label {
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            color: var(--wc);
        }
        .signin-card button {
            border: none;
            background: #336699;
            height: 50px;
            width: 88%;
            margin-left: 0px;
            border-radius: 5px;
            font-weight: 500;
            font-size: 22px;
            color: var(--wc);
        }
    </style>
@endsection
