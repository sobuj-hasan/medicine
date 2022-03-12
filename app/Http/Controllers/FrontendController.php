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

    public function searchResult(Request $request)
    {

        // $query = Parkingspace::query();
        // if ($request->parking_space) {
        //     $data['parking_space'] = $request->parking_space;
        //     $query          = $query->where('name', "$request->parking_space");
        // }
        // if ($request->parking_city) {
        //     $data['parking_city'] = $request->parking_city;
        //     $query =  $query->where('city', $request->parking_city);
        // }
        // if ($request->parking_address) {
        //     $data['parking_address'] = $request->parking_address;
        //     $query =  $query->where('address', $request->parking_address);
        // }
        // $data['search_results'] = $query->where('status', 1)->limit(12)->get();

        // $data['parking_spaces'] = Parkingspace::where('status', 1)->inRandomOrder()->limit(12)->get();

        $data['properties'] = Property::where('status', 1)->latest()->limit(60)->get();
        return view('search_result', $data);
    }

    public function propertydetails($id){
        $data['single_property'] = Property::where('id', $id)->firstOrFail();
        $data['related_property'] = Property::where('category_id', $data['single_property']->category_id)->where('id', '!=', $data['single_property']->id)->get();
        return view('property_details', $data);
    }

    public function contact_property_submit(Request $request){
        $request->validate([
            'property_id' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        ContactProperty::create($request->all());
        Notify::success('Message Submit This Author', 'Success');
        return back();
    }

    public function review(){
        return view('review');
    }
    public function transaction(){
        return view('transaction');
    }
    public function verifyproperty(){
        return view('verify_property');
    }
    public function viewmoredetails(){
        return view('view_more_details');
    }




    public function blogdetails($slug){
        $data['single_blog'] = Blog::where('slug', $slug)->firstOrFail();
        $data['related_blog'] = Blog::where('category_id', $data['single_blog']->category_id)->where('id', '!=', $data['single_blog']->id)->limit(4)->get();
        return view('blog_details', $data);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $subscribe = Subscribe::where('email', $request->email)->count();
        if ($subscribe != 0) {
            Notify::error('This email address already exists', 'Error');
            return back();
        }
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Subscribe::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Successfully Subscribed our newslatter', 'Congrats, Dear');
        return back();
    }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}
