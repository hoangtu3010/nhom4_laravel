<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function list(){
        $cat = Departments::all();
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
        Departments::create([
            "name"=>$n
        ]);
        return redirect()->to("departments");
    }
    public function delete($id){
        $cat = Departments::findOrFail($id);
        $cat->delete();
        return redirect()->to("departments");
    }
    public function edit($id){
        $cat = Departments::findOrFail($id);
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
        $cat = Departments::findOrFail($id);
        $cat->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("departments");
    }


}
