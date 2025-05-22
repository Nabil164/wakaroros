@extends('admin.layout')
@section('title', 'Edit Produk')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Edit Produk</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control" value="{{ $product->nama }}" required>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ $product->harga }}" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required>{{ $product->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Gambar</label><br>
                    @if($product->gambar)
                        <img src="{{ asset('storage/'.$product->gambar) }}" width="80" class="mb-2 rounded"><br>
                    @endif
                    <input type="file" name="gambar" class="form-control">
                    <small class="text-muted">Kosongkan jika tidak ingin ganti gambar</small>
                </div>
                <button class="btn btn-warning text-white">Update</button>
                <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection