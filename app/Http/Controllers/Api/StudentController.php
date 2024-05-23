<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    function index(){
        $student = Student::all();
        if($student->isNotEmpty()){
            return response()->json(['student'=>$student],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'no student'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $student = Student::create($request->all());
        if($student){
            return response()->json(['student'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $student = Student::create($request->all());
        if($student){
            return response()->json(['student'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $student = Student::find($id);
        if($student){
            return response()->json(['student'=>$student],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'no product finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $student = Student::find($id);
        if($student){
            $student->update($request->all());
            return response()->json(['student'=>$product],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $student = student::find($id);
        if($student){
            $student->delete();
            return response()->json(['student'=>$student],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'no product'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $student = Student::find($id);
        if($student){
            return response()->json(['student'=>$student],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['student'=>'no student'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

}
