<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Project;

use App\Service;
use App\Category;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($id){
        $cats=Category::all();
        $cat=Category::findOrfail($id);
        $projects=$cat->project;
        return view('admin.project.category',\compact('cats','projects'));
    }



    public function dash(){
        $users=User::all();
        $projects=Project::all();
        $services=Service::all();
        $categorys=Category::all();
        return view('admin.dashboard',\compact('users','projects','services','categorys'));

        
    }
}
