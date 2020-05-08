<?php

namespace App\Http\Controllers\client;

use App\Blog;
use App\User;
use App\Project;
use App\Service;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::orderby('id','desc')->paginate('6');
        $allproject=Project::all();
        $cats=Category::all();

        $blogs=Blog::orderby('id','desc')->paginate('4');
        $users=User::all();
        return view('client.home.index',compact('projects','cats','blogs','allproject','users'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }



    public function category($id){
        $cats=Category::all();
        $cat=Category::findOrfail($id);
        $projects=$cat->project;
        return view('client.home.cat',\compact('cats','projects'));

    }

    public function service(){
        $services=Service::orderby('id','desc')->paginate('4');
        return view('client.service.service',\compact('services'));
    }

    public function about(){
        return view ('client.about.about');
    }


    
}
