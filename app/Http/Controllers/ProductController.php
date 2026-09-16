<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('products', compact('products'));
    }

    public function students()
    {
        $students = User::orderBy('name')->get();

        return view('students', compact('students'));
    }
}
