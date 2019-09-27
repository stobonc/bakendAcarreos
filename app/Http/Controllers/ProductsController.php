<?php

namespace Products\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
 //
    public function getAll(){
        $product=Products::get();
        return response()->json($product);

    }
    public function add(){
        
    }
}
