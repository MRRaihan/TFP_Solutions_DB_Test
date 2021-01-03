<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_approve', "1")->get();
        //dd($services);
        return view('frontend.index', compact('services'));
    }

    public function details($id){
        $data['services'] = Service::where('status', 'active')->get();
        $data['service']= Service::findOrFail($id);
        return view('frontend.details', $data);
    }
}
