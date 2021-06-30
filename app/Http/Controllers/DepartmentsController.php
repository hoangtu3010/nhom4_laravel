<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;


class DepartmentsController extends Controller
{

    public function list()
    {
        $cat = Departments::all();
        return view("departments.department", [
            "departments" => $cat
        ]);
    }

    public function add()
    {
        return view("departments.add");
    }

    public function save(Request $request)
    {
        $n = $request->get("name");
        $d = $request->get("description");
        Departments::create([
            "name" => $n,
            "description" => $d
        ]);
        return redirect()->to("departments");
    }

    public function delete($id)
    {
        $cat = Departments::findOrFail($id);
        $cat->delete();
        return redirect()->to("departments");
    }

    public function edit($id)
    {
        $cat = Departments::findOrFail($id);
        return view("departments.edit", [
            "departments" => $cat
        ]);
    }

    public function update(Request $request, $id)
    {
        $cat = Departments::findOrFail($id);
        $cat->update([
            "name" => $request->get("name"),
            "description" => $request->get("description")
        ]);
        return redirect()->to("departments");
    }


}
