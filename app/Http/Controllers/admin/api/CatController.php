<?php

namespace App\Http\Controllers\admin\api;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function index(){

         $cat=Category::all();
         return response()->json(['data'=>$cat]);
    }
    public function create(Request $request){
         
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return response()->json(['message'=>'Created Successfully'],201);
    }

    public function show($id){

        $cat=Category::Find($id);

        return $cat ? response()->json(['data'=>$cat]): response()->json(['message'=>'There is no post']);
    }

    public function update(Request $request,$id){

        $cat=Category::Find($id);

        if($cat)
        {
            $cat->update([
                'name'=>$request->name,
                'description'=>$request->description
            ]);
            return response()->json(['data'=>$cat],201);
        }
        else
        {
            return response()->json(['message'=> 'There is no post'],404);
        }
    }

    public function delete($id){

        $cat=Category::Find($id);

        if($cat)
        {
            $cat->delete($id);
            return response()->json(['message'=>'Deleted Successfully'],200);
        }
        else
        {
            return response()->json(['message'=> 'There is no post'],404);
        }
    }
}
