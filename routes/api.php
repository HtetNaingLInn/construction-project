<?php


use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




Route::get('cat',function(){
    
            $cats=Category::all();
            return response()->json(['data'=>$cats]);
           
});

Route::post('store',function(Request $request){

            Category::create([
                'name'=>$request->name,
                'description'=>$request->description
            ]);
            return response()->json(['message'=>'created Success'],201);
});

Route::get('show/{id}',function($id){

            $cat=Category::Find($id);
            if($cat)
            {
            return response()->json(['data'=>$cat]);
            }
            return response()->json(['message'=>"There is no post"],404);

});

Route::put('update/{id}',function(Request $request ,$id){

            $cat= Category::find($id);
            if($cat){
                $cat->update([
                'name'=>$request->name,
                'description'=>$request->description
            ]);
            return response()->json(['data'=>$cat]);
            }
            return response()->json(["message"=>"There is no post "],404);
});

Route::delete('delete/{id}',function($id){
            $cat=Category::Find($id);
            if($cat){
            $cat->delete($id);
            return response()->json(['message'=>'Deleted Success']);
    }
            return response()->json(['message'=>'There is no post'],404);
});



Route::group(['prefix' => 'admin','namespace'=>'admin\api'], function () {
    
    Route::get('cat','CatController@index');
    Route::post('cat/create','CatController@create');
    Route::get('cat/show/{id}','CatController@show');
    Route::put('cat/edit/{id}','CatController@update');
    Route::delete('cat/delete/{id}','CatController@delete');
});