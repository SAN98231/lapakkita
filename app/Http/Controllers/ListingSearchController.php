<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class ListingSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Jika kolom pencarian kosong, tampilkan semua produk
        if (empty($query)) {
            $products = Product::all();
        } else {
            // Jika ada query pencarian, filter produk berdasarkan nama, deskripsi, atau harga
            $products = Product::where('name', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%")
                        ->orWhere('price', 'LIKE', "%{$query}%")
                        ->get();
        }

        return view('pages.listing', compact('products', 'query'));
    }
}


