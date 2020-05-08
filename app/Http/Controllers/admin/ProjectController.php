<?php

namespace App\Http\Controllers\admin;

use App\Project;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    
    public function index()
    {
        if(request('search')){
            $projects=Project::where('title','like','%'.request('search').'%')
            ->orderby('id','desc')->paginate('6');
        }else{
            $projects=Project::orderby('id','desc')->paginate('6');
        }
        $cats=Category::all();
        
        return view('admin.project.index',\compact('projects','cats'));
    }

   
    public function create()

    
    {
        
        $cats=Category::all();
        return view('admin.project.create',\compact('cats'));
    }

    
    public function store(ProjectRequest $request)
    {
        $imgs=$request->file('imgs');
        $imgarray=[];

        if(!empty($imgs))
        {
        foreach($imgs as $img)
        $imagename=time().'_'.$img->getClientOriginalName();
        array_push($imgarray,$imagename);
        $img->move(\public_path().'/upload/', $imagename);
        }
        Project::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'cat_id'=>$request->get('cat_id'),
            'imgs'=>serialize($imgarray)


        ]);
        return \redirect('admin/project/create')->with('status','Successfully Created');
    }

    
    public function show($id)
    {
        $project=Project::findOrfail($id);

        return view('admin.project.show',\compact('project'));
    }

   
    public function edit($id)
    {
        $project=Project::findorfail($id);
        $cats=Category::all();
        return view('admin.project.edit',\compact('project','cats'));
    }

   
    public function update(ProjectRequest $request, $id)
    {
        $imgs=$request->file('imgs');
        $imgarray=[];

        if(!empty($imgs)){
        foreach($imgs as $img)
        $imgname=time().'_'.$img->getClientOriginalName();
        array_push($imgarray,$imgname);
        $img->move(public_path().'/upload/',$imgname);
        }
        Project::findOrfail($id)->update([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'cat_id'=>$request->get('cat_id'),
            'imgs'=>serialize($imgarray)
        ]);
            return redirect('admin/project')->with('status','Edited Successfully');
    }

    
    public function destroy($id)
    {
        Project::destroy($id);
        return \redirect('admin/project')->with('status','Deleted Successfully');
    }
}
