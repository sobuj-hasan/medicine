<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Service;
use App\Models\ServiceItem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = Service::where('status', 1)->get();
        return view('admin.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_title' => 'required',
            'service_price' => 'required|integer',
            'discount' => 'required|integer',
            'service_note' => "required",
            'image' => 'required',
            // 'items[]' => 'required',
        ]);


        $services = Service::create($request->except('_token', 'image', 'items[]') + [
            'user_id' => Auth::user()->id,
        ]);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/' . $photo_name;

            Image::make($photo)->resize(320, 240)->save($location);
            Service::find($services->id)->update([
                'image' => $photo_name,
                'status' => 1,
            ]);
        }
        foreach ($request->items as $item) {
            ServiceItem::insert([
                'service_id' => $services->id,
                'service_item' => $item,
                'created_at' => Carbon::now()
            ]);
        }
        Notify::success('Created a new Services !', 'Success');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['single_service'] = Service::where('id', $id)->firstOrFail();
        return view('admin.services.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['single_service'] = Service::where('id', $id)->firstOrFail();
        return view('admin.services.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $services)
    {
        $request->validate([
            'service_title' => 'required',
            'service_price' => 'required|integer',
            'discount' => 'required|integer',
            'service_note' => 'required',
            'image' => '',
        ]);

        $services->update($request->except('_token', 'image', 'items[]') + [
            'user_id' => Auth::user()->id,
        ]);
        
        if ($request->hasFile('image')) {
            if ($services->image) {
                unlink('assets/img/' . $services->image);
            }
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/' . $photo_name;

            Image::make($photo)->resize(320, 240)->save($location);
            $services->update([
                'image' => $photo_name,
            ]);
        }
        
        Notify::success('Service infomation Updated', 'Success');
        return redirect()->route('service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->first()->delete();
        ServiceItem::where('service_id', $id)->delete();
        Notify::error('This Service Deleted', 'Deleted');
        return back();
    }
}
