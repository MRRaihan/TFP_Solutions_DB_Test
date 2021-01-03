<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = Service::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('provider.service.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.service.create');

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
            'title'=>'required',
            'description'=>'required',
            'unit_price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='assets/provider/service/';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.$file_name;

        }

        $data['title'] = $request->title;
        $data['provider_id'] = 2;
        $data['description'] = $request->description;
        $data['unit_price'] = $request->unit_price;
        $data['status'] = $request->status;

        //dd($data);
        Service::create($data);
        session()->flash('success', 'Service Create Successfully');
        return redirect()->route('provider.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('provider.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $data['service']=$service;
        return view('provider.service.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'unit_price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='assets/provider/service';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($service->image)){
                unlink($service->image);
            }
        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['unit_price'] = $request->unit_price;
        $data['status'] = $request->status;


        $service->update($data);
        session()->flash('success', 'Service Update Successfully');
        return redirect()->route('provider.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Service::findOrFail($id);
        $data->delete();
        if(file_exists(($data->image))){
            unlink($data->image);
        }
        session()->flash('success', 'Service deleted successfully');
        return redirect()->route('provider.service.index');

    }
}
