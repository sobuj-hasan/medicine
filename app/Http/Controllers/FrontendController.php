<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Consultant;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use App\Models\ContactProperty;
use App\Models\NewArrival;
use App\Models\Property;
use App\Models\Service;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function newarrivals(){
        $data['new_arrivals'] = NewArrival::where('status', 1)->inRandomOrder()->limit(80)->get();
        return view('new_arrivals', $data);
    }

    public function arrivalsdetails(Request $request, $id){
        $data['singleproduct'] = NewArrival::where('id', $id)->firstOrFail();
        return view('arrivals_details', $data);
    }

    public function shop(){
        $data['products'] = Service::where('status', 1)->inRandomOrder()->limit(80)->get();
        return view('shop', $data);
    }
    
    public function productdetails(Request $request, $id){
        $data['singleproduct'] = Service::where('id', $id)->firstOrFail();
        return view('product_details', $data);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }

    public function privacy_policy(){
        return view('privacy_policy');
    }

    public function terms_condition(){
        return view('terms_condition');
    }
    
    public function payment(){
        return view('payment');
    }

    public function form_submit(){
        return view('form_submit');
    }


}
