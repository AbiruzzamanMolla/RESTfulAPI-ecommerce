<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seller;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::has('products')->get();
        return response()->json(['data' => $sellers], 200);
    }

    
    public function show($id)
    {
        //
    }

   
}
