@extends('layouts.app')
@section('title', 'Register')
@section('content')
  <!-- signup -->
  <div class="page-3-sec-1">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="p-3d1">
                <form class="sgnup" method="POST" action="{{ route('register') }}" style="border:1px solid #ccc">
                  @csrf
                    <div class="container">
                      <h1>Create an account</h1>
                      <p>Or, <span> sign into your account.</span></p>
                      <hr>
                      <div class="p3-1 d-flex">
                          <div class="col-lg-12">
                            <label for="name"><b>Full Name Here</b></label>
                            <input  type="text" id="lgin" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                      </div>
                      <br>
                      <label for="email"><b>Email</b></label>
                      <input type="text" id="lgin" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <br>
                      <br>
                      <label for="ph">Phone Number</label> <br>
                      <div class="snup-dgn d-flex">
                          <select name="" id="">
                            <option value=""> +880</option>
                          </select>
                          <input type="text" id="lgin" placeholder="Enter your phone number" name="phone" value="{{ old('phone') }}" required>
                          @error('phone')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <br> <br>
                      <label for="psw"><b>Password</b></label>
                      <input type="password" id="lgin" placeholder="Enter Password" name="password" value="{{ old('password') }}" required>
                      @error('password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <br> <br>
                      <label for="psw"><b>Confirm Password</b></label>
                      <input type="password" id="lgin" placeholder="Enter Password" name="password_confirmation">
                      <br> <br>
                      <p> By registering I accept the TOLETBOOK.COM Terms and Condition</p>
                      <div class="clearfix">
                          <button type="submit" class="signupbtn">Sign Up</button>
                      </div>
                    </div>
                </form>
                <p>------------------------------------Or-----------------------------------</p>
                <button class="p3btn"><i class="fab fa-google "></i>Continue with Google</button>
                <button class="p3btn"><i class="fab fa-facebook"></i>Continue with Facebook</button>
              </div>
          </div>
        </div>
        </form> 
    </div>
  </div>
  </div>    
  </div>
  </div>
@endsection

