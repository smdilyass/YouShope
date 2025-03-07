<?php

namespace App\Http\Controllers;
use App\Models\Product;
 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products with their variants and images
        $products = Product::with('variants', 'images')->paginate(10);

        // Pass the data to the view
        return view('welcome', compact('products'));
        
    }
    
}
