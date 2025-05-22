@extends('admin.layout')
@section('title', 'Manajemen Produk')

@section('content')
<div class="container">
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0" style="color:#8B0000;">Daftar Produk</h2>
        <a href="{{ route('produk.create') }}" class="btn btn-warning text-white"><i class="fa fa-plus"></i> Tambah Produk</a>
    </div>
    <div class="table-responsive rounded shadow-sm">
        <table class="table table-hover align-middle bg-white">
            <thead class="table-warning">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th style="width:120px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>
                        @if($product->gambar)
                            <img src="{{ asset('storage/'.$product->gambar) }}" width="60" class="rounded">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $product->nama }}</td>
                    <td>Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $product->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('produk.destroy', $product->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">Belum ada produk.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection