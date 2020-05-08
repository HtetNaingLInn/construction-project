<?php

namespace App\Http\Controllers\admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
   
    public function index()
    {
        $services=Service::orderby('id','desc')->paginate(6);
        return view('admin.service.index',\compact('services'));
    }


 
    public function create()
    {
        return view('admin.service.create');
    }

   

    public function store(ServiceRequest $request)
    {
        $images=$request->file('image');
        $imageArray=[];

        
        if(!empty($images))
        {
        foreach($images as $image)
        $imageName = time().'_'.$image->getClientOriginalName();
        array_push($imageArray,$imageName);
        $image->move(public_path().'/service/',$imageName);
        }


        Service::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'price'=>$request->get('price'),
            'image'=> serialize($imageArray)
        ]);
            return redirect('admin/service/create')->with('status','Successfully Created Service');

    }

  


    public function show($id)
    {
        $service=Service::findOrfail($id);

        return view('admin.service.show',\compact('service'));
    }

    


    public function edit($id)
    {
        $service=Service::findOrfail($id);

        return view('admin.service.edit',\compact('service'));
    }



    public function update(ServiceRequest $request, $id)
    {
        $images=$request->file('image');
        $imageArray=[];


        if(!empty($images))
        {
        foreach($images as $image)
        $imageName = time().'_'.$image->getClientOriginalName();
        array_push($imageArray,$imageName);
        $image->move(public_path().'/service/',$imageName);
        }


        Service::findOrfail($id)->update([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'price'=>$request->get('price'),
            'image'=>serialize($imageArray)
        ]);
            return redirect('admin/service')->with('status','Successfully Edited ');

    }

    


    public function destroy($id)
    {
        Service::destroy($id);

        return \redirect('admin/service')->with('status','Successfully Deleted');
    }
}
