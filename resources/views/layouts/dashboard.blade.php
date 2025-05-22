@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>
    <a href="{{ route('produk.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Produk</a>
    
    <table class="w-full mt-4 text-left border">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $product->nama }}</td>
                <td class="px-4 py-2">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                <td class="px-4 py-2 flex gap-2">
                    <a href="{{ route('produk.edit', $product->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('produk.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
