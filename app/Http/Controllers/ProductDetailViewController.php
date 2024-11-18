<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailViewController extends Controller
{
    public function show($id)
    {
        // Validasi bahwa ID adalah angka
        if (!is_numeric($id)) {
            abort(400, 'Invalid Product ID'); // HTTP 400 untuk ID yang tidak valid
        }

        // Mengambil produk berdasarkan ID beserta informasi user (penjual)
        $product = Product::with('user')->where('id', $id)->first();

        // Jika produk tidak ditemukan atau tidak aktif
        if (!$product) {
            abort(404, 'Product not found'); // HTTP 404 jika produk tidak ditemukan
        }

        // Mengarahkan ke tampilan 'productdetails' dengan data produk
        return view('pages.productdetails', compact('product'));
    }
}

