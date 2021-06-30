<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Departments;
use App\Models\Lead;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function calender()
    {
        return view("calender");
    }

    public function list()
    {
        $ct = Customer::with("Lead")->get();
        return view("customers.customer", [
            "customers" => $ct
        ]);
    }

    public function add()
    {
        $ct = Customer::with("Lead")->get();
        return view("customers.add", [
            "customers" => $ct
        ]);
    }

    public function save(Request $request)
    {
        $n = $request->get("name");
        $b = $request->get("birthday");
        $p = $request->get("phone");
        $e = $request->get("email");
        $a = $request->get("address");
        $l = $request->get("lead_id");
        Customer::create([
            "name" => $n,
            "birthday" => $b,
            "phone" => $p,
            "email" => $e,
            "address" => $a,
            "lead_id" => $l
        ]);
        return redirect()->to("customers");
    }

    public function delete($id)
    {
        $cat = Customer::findOrFail($id);
        $cat->delete();
        return redirect()->to("customers");
    }

    public function edit($id)
    {
        $cat = Customer::findOrFail($id);
        $l = Lead::all();
        return view("customers.edit", [
            "customers" => $cat,
            "lead" => $l
        ]);
    }

    public function update(Request $request, $id)
    {
        $cat = Customer::findOrFail($id);
        $cat->update([
            "name" => $request->get("name"),
            "birthday" => $request->get("birthday"),
            "phone" => $request->get("phone"),
            "email" => $request->get("email"),
            "address" => $request->get("address"),
            "lead_id" => $request->get("lead_id"),
        ]);
        return redirect()->to("customers");
    }
}
