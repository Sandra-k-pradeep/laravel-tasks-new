<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class task extends Controller
{
    public function index()
    {
        $name = 'Sandra';
        $age = 24;
        return view('home', compact('name', 'age'));
    }  
    public function about()
    {
        $name = 'Sandra';
        $age = 24;
        return view('about', compact('name', 'age'));
    }  
    public function contact()
    {
        $name = 'Sandra';
        $age = 24;
        return view('contact', compact('name', 'age'));
    }  
}

