<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        // Ambil semua produk tanpa batasan jumlah
        $products = Product::all();

        return view('pages.listing', compact('products'));
    }
}
