@extends('layouts.app')
@section('title', 'Payment')
@section('content')
    <!-- Payment page start1 -->

    <div class="paymentpage">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 paymentbox-1">

    <h1>sexmedicinebd</h1> <hr>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
        <label class="form-check-label" for="flexCheckIndeterminate">
            Cash On Delivery
        </label>
    </div> <hr>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
        <label class="form-check-label" for="flexCheckIndeterminate">
            Payment with
        </label>
    </div> <hr>



    <div class="prodtlsbox d-flex">

        
            <div class="popup" id="popup-1">

                <div class="overlay"></div>
                
                <div class="content">
                
                <div class="close-btn" onclick="togglepopup()">&times;</div>
                
            
                
                <p> 01971104346</p>
                
                
                </div>
                
                
                </div>
                
                
                <button onclick="togglepopup()"> <img src="{{ asset('img/logo/bks.jpg') }}" alt="">
                </button>
            


                <div class="popup" id="popup-1">

                    <div class="overlay"></div>
                    
                    <div class="content">
                    
                    <div class="close-btn" onclick="togglepopup()">&times;</div>
                    
                
                    
                    <p> 01971104346</p>
                    
                    
                    </div>
                    
                    
                    </div>
                    
                    
                    <button onclick="togglepopup()"> <img src="{{ asset('img/logo/nagad.png') }}" alt="">
                    </button>



                    <div class="popup" id="popup-1">

                        <div class="overlay"></div>
                        
                        <div class="content">
                        
                        <div class="close-btn" onclick="togglepopup()">&times;</div>
                        
                        <h1>Rocket</h1>
                        
                        <p> 01971104346</p>
                        
                        
                        </div>
                        
                        
                        </div>
                        
                        
                        <button onclick="togglepopup()"><img src="{{ asset('img/logo/rocket.jpg') }}" alt="">
                        </button>



                        <div class="popup" id="popup-1">

                            <div class="overlay"></div>
                            
                            <div class="content">
                            
                            <div class="close-btn" onclick="togglepopup()">&times;</div>
                            
                            <h1>Master Card</h1>
                            
                            <p>.....</p>
                            
                            
                            </div>
                            
                            
                            </div>
                            
                            
                            <button onclick="togglepopup()"><img src="{{ asset('img/logo/mastercard.png') }}" alt="">
                            </button>
        




    </div>


    <div class="paymentbowbtn">

    <button>Confirm and pay</button>

    </div>





    </div>









    </div>
    </div>
    </div>





    <!-- payment page end -->
@endsection




