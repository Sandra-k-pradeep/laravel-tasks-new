<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products'); 
    }

    public function show($id)
    {
        return view('product_detail', ['id' => $id]); 
    }
}
