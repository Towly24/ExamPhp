<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listAll(){
        $data = Student::all();
        return view("list",compact('data'));
    }
    public function create(){
        $data = Student::all();
        return view("create",compact("data"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "age"=>"required|numeric|min:0",
            "address"=>"required|string",
            "telephone"=>"required|numeric"
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
        ]);



        $student = Student::create([
            "name"=>$request->get("name"),
            "age"=>$request->get("age"),
            "address"=>$request->get("address"),
            "telephone"=>$request->get("telephone"),
        ]);
        return redirect()->to("/list");
    }
}
