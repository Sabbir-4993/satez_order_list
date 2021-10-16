<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create_order(){
        return view('backend.pages.order');
    }

    public function autocompleteSearch(Request $request)
    {
//        $datas = Product::select("name")
//            ->where("name", "LIKE", "%{$request->terms}%")
//            ->get();
//
//        return response()->json($datas);

        $query = $request->get('query');
        $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }

    public function order_details(){
        return view('backend.pages.order_details');
    }
}
