<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    
    public function index()
    {
        if(request('search')){
            $blogs=Blog::where('title','like','%'.request('search').'%')->orderby('id','desc')->paginate('4');
        }
        else{
        $blogs=Blog::orderby('id','desc')->paginate('4');
        }
        return view('admin.blog.index',\compact('blogs'));
    }

    
    public function create()
    {
       return view('admin.blog.create'); 
    }

    
    public function store(BlogRequest $request)
    {
        $images=$request->file('image');
        $imageArray=[];

        if(!empty($images)
        ){
        foreach($images as $image)
        $imageName=time().'_'.$image->getClientOriginalName();
        array_push($imageArray,$imageName);
        $image->move(\public_path().'/blog/',$imageName);
        }
        


        Blog::create([
            'title'=>$request->get('title'),
            'content'=>$request->get('content'),
            'image'=>serialize($imageArray),
            'user_id'=>$request->get('user_id')
        ]);
        return \redirect('admin/blog/create')->with('status','Blog Created Successfully');
        
    }

    
    public function show($id)
    {
        $blog=Blog::findOrFail($id);
        $user=$blog->user;
        return view('admin.blog.show',compact('blog','user'));

    }

   
    public function edit($id)
    {
        $blog=Blog::findOrfail($id);

        return view('admin.blog.edit',\compact('blog'));
    }

   
    public function update(BlogRequest $request, $id)
    {
        $images=$request->file('image');
        $imageArray=[];

        if(!empty($images)
        ){
        foreach($images as $image)
        $imageName=time().'_'.$image->getClientOriginalName();
        array_push($imageArray,$imageName);
        $image->move(\public_path().'/blog/',$imageName);
        }
        


        Blog::findorFail($id)->update([
            'title'=>$request->get('title'),
            'content'=>$request->get('content'),
            'image'=>serialize($imageArray),
            'user_id'=>$request->get('user_id')
        ]);
        return \redirect('admin/blog')->with('status','Blog Edited Successfully');
    }

   
    public function destroy($id)
    {
    
        Blog::destroy($id);
      return  redirect('admin/blog')->with('status','Deleted Successfully');
    }
}
