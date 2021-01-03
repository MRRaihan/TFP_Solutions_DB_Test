<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
;

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
        return view('admin.service.index', $data);
    }

    public function show($id)
    {
        $service= Service::findOrFail($id);
        return view('admin.service.show', compact('service'));
    }


    public function destroy($id)
    {
        $data = Service::findOrFail($id);
        $data->delete();
        if(file_exists(($data->image))){
            unlink($data->image);
        }
        session()->flash('success', 'Service deleted successfully');
        return redirect()->route('admin.service.index');
    }

    public function approve($id)
    {
        $data = Service::findOrFail($id);
        $data->is_approve = "1";

        $data->save();
        session()->flash('success', 'Service successfully approved');
        return redirect()->route('admin.service.index');
    }

    public function unapprove($id)
    {
        $data = Service::findOrFail($id);
        $data->is_approve = "0";

        $data->save();
        session()->flash('success', 'Service successfully approved');
        return redirect()->route('admin.service.index');
    }
}
