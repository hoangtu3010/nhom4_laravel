<?php

namespace App\Http\Controllers;

use App\Models\departments;
use Illuminate\Http\Request;

class departmentsController extends Controller
{
    public function list(){
        $cat = departments::all();
        return view("departments.home",[
           "departments"=>$cat
        ]);
    }
    public function add(){
        return view("departments.form",[
        ]);
    }
    public function save(Request $request){
        $request->validate([
            "name"=>"required",

        ],[
            "name.required"=>"Vui lòng nhập tên sản phẩm",
        ]);
        $n =$request->get("name");
        departments::create([
            "name"=>$n
        ]);
        return redirect()->to("departments");
    }
    public function delete($id){
        $cat = departments::findOrFail($id);
        $cat->delete();
        return redirect()->to("departments");
    }
    public function edit($id){
        $cat = departments::findOrFail($id);
        return view("departments.edit",[
           "departments"=>$cat
        ]);
    }
    public function update(Request $request,$id){
        $request->validate([
            "name"=>"required",

        ],[
            "name.required"=>"Vui lòng nhập tên sản phẩm",
        ]);
        $cat = departments::findOrFail($id);
        $cat->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("departments");


    }


}
