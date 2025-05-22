@extends('layouts.app')

@section('title', $product->nama)

@section('content')
  <div class="detail-section">
    <h1>{{ $product->nama }}</h1>
    <img src="{{ asset('storage/'.$product->gambar) }}" alt="{{ $product->nama }}" style="width: 300px;">
    <p><strong>Harga:</strong> Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong> {{ $product->deskripsi }}</p>
    <a href="{{ route('produk.edit', $product->id) }}" class="cta-btn">Edit Produk</a>
    <form action="{{ route('produk.destroy', $product->id) }}" method="POST" style="display:inline-block;">
      @csrf
      @method('DELETE')
      <button class="cta-btn" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus Produk</button>
    </form>
    <a href="{{ route('katalog') }}" class="cta-btn">Kembali ke Katalog</a>
  </div>
@endsection