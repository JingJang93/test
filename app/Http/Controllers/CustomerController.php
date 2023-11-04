<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::with('address')->get();
        return response()->json([
            "data"=> $customers
        ]);
    }
}
