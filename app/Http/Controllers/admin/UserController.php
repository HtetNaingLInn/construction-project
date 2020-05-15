<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index()
    {
        $users=User::all();
        return view('admin.user.index',\compact('users'));
    }

   
    public function create()
    {
        return view('admin.user.create');
    }

    
    public function store(UserRequest $request)
    {
        $image=$request->file('image');
        $imageName=time().'_'.$image->getClientOriginalName();
        $image->move(\public_path().'/profile/',$imageName);
       
        $password=$request->password;
        User::create
        ([
            'name'     =>$request->get('name'),
            'email'    =>$request->get('email'),
            'password' =>Hash::make($password),
            'role'     =>$request->get('role'),
            'image'    =>$imageName

        ]);
            return \redirect('admin/user')->with('status','Successfully Added User');
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $user=User::findorFail($id);
        return view('admin.user.edit',compact('user'));
    }

    
    public function update(Request $request, $id)
    {
       
        $image=$request->file('image');
       
        $imageName=time().'_'.$image->getClientOriginalName();
        $image->move(\public_path().'/profile/',$imageName);
        
        
        User::findOrfail($id)
        ->update
        ([
            'name'  =>$request->get('name'),
            'email' =>$request->get('email'),    
            'role'  =>$request->get('role'),
            'image' =>$imageName

        ]);
            return \redirect('admin/user')->with('status','Successfully Edited User');
    }

    
    public function destroy($id)
    {
        User::destroy($id);
        return  redirect('admin/user')->with('status','Successfully Deleted');
    }
}
