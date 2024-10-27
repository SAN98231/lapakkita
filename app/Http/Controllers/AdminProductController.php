<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::with('user')->get(); // Ambil semua produk dengan relasi user
        return view('admin.products.manageproducts', compact('products'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.products.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:svg|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $path,
        ]);

        return redirect()->route('admin.products.manageproducts')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $users = User::all();
        return view('admin.products.edit', compact('product', 'users'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:svg|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($product->image);
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        $product->update([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.products.manageproducts')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Delete image
        Storage::disk('public')->delete($product->image);
        $product->delete();

        return redirect()->route('admin.products.manageproducts')->with('success', 'Product deleted successfully.');
    }
}