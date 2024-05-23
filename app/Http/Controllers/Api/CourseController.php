<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function index(){
        $course = Course::all();
        if($course->isNotEmpty()){
            return response()->json(['course'=>$course],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['course'=>'no course'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $Course = Course::create($request->all());
        if($Course){
            return response()->json(['Course'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['Course'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $Course = Course::create($request->all());
        if($Course){
            return response()->json(['Course'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['Course'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $Course = Course::find($id);
        if($Course){
            return response()->json(['Course'=>$Course],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['Course'=>'no Course finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $Course = Course::find($id);
        if($Course){
            $Course->update($request->all());
            return response()->json(['Course'=>$Course],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['Course'=>'no Course'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $Course = Course::find($id);
        if($Course){
            $Course->delete();
            return response()->json(['Course'=>$Course],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['Course'=>'no Course'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $Course = Course::find($id);
        if($Course){
            return response()->json(['Course'=>$Course],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['Course'=>'no Course'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
