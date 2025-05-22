<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('pages.katalog', compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('pages.detail', compact('product'));
    }

    public function adminIndex() {
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }

    public function create() {
        return view('admin.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk', 'public');
        }

        Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $product->gambar = $request->file('gambar')->store('produk', 'public');
        }

        $product->save();

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return back()->with('success', 'Produk berhasil dihapus');
    }
}
