<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::orderBy('id', 'DESC')->get();
        return view('backend.pages.customer.create', compact('customer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|unique:customers|max:100',
            'email' => '',
            'area_id' => 'required',
            'address' => 'required|max:250',
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->area_id = $request->area_id;
        $customer->address = $request->address;

        $customer->save();

        return redirect()->back()->with('message', 'Customer Created Successfully');
    }

    public function destroy($id)
    {
        //
    }

    public function check(Request $request){
        if ($request->get('phone'))
        {
            $phone = $request->get('phone');
            $data = DB::table('customers')->where('phone', $phone)->count();

            if ($data > 0)
            {
                echo 'not_unique';
            }
            else{
                echo 'unique';
            }
        }
    }


}
