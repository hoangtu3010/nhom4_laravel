<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Departments;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $ct = Customer::with("Lead")->get();
        return view("customers.customer",[
            "customers"=>$ct
        ]);
    }

    public function add(){
        $ct = Customer::with("Lead")->get();
        return view("customers.add",[
            "customers"=>$ct
        ]);
    }
    public function save(Request $request){
        $n = $request->get("name");
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
