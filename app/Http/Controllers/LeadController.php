<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function list()
    {
        $cat = Lead::with("department")->get();
        return view("leaders.lead", [
            "lead" => $cat
        ]);
    }

    public function add()
    {
        $department = Departments::all();
        return view("leaders.add", [
            "departments" => $department
        ]);
    }

    public function save(Request $request)
    {
        $n = $request->get("name");
        $b = $request->get("birthday");
        $p = $request->get("phone");
        $e = $request->get("email");
        $a = $request->get("address");
        $d = $request->get("department_id");
        Lead::create([
            "name" => $n,
            "birthday" => $b,
            "phone" => $p,
            "email" => $e,
            "address" => $a,
            "department_id" => $d,
        ]);

        return redirect()->to("lead");
    }

    public function delete($id)
    {
        $l = Lead::findOrFail($id);
        $l->delete();
        return redirect()->to("lead");
    }

    public function edit($id)
    {
        $l = Lead::findOrFail($id);
        $department = Departments::all();
        return view("leaders.edit", [
            "leads" => $l,
            "departments" => $department
        ]);
    }

    public function update(Request $request, $id)
    {
        $cat = Lead::findOrFail($id);
        $cat->update([
            "name" => $request->get("name"),
            "birthday" => $request->get("birthday"),
            "phone" => $request->get("phone"),
            "email" => $request->get("email"),
            "address" => $request->get("address"),
            "department_id" => $request->get("department_id")
        ]);
        return redirect()->to("lead");
    }

}
