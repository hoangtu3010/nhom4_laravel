<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function list(){
        $cat = Lead::with("department")->get();
        return view("leaders.lead",[
            "lead"=>$cat
        ]);
    }
    public function add(){
        return view("departments.add",[
        ]);
    }
    public function save(Request $request){
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
        $cat = Departments::findOrFail($id);
        $cat->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("departments");
    }

}
