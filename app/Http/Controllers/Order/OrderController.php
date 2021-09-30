<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create_order(){
        return view('backend.pages.order');
    }

    public function order_details(){
        return view('backend.pages.order_details');
    }
}
