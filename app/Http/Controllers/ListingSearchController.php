<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class ListingSearchController extends Controller
{
    public function search(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'query' => 'nullable|string|max:255', // Input query boleh kosong, harus string, maksimal 255 karakter
        ]);

        // Ambil query yang telah divalidasi dan disanitasi menggunakan filter_var
        $query = isset($validated['query']) ? filter_var($validated['query'], FILTER_SANITIZE_STRING) : '';

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

        // Kirim data ke view
        return view('pages.listing', compact('products', 'query'));
    }
}


