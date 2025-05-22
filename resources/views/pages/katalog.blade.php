@extends('layouts.app')

@section('title', 'Katalog | Batik Wakaroros')

@section('content')
<div class="katalog-section" id="katalog">
    <div class="katalog-title">Katalog Batik Wakaroros</div>
    <div class="katalog-grid">
      <div class="katalog-item">
        <img src="{{ asset('images/page1_img6.jpeg') }}" alt="Batik 1">
        <div class="nama-produk">Batik Motif Wakaroros</div>
        <div class="harga">Rp200.000</div>
      </div>
      <div class="katalog-item">
        <img src="{{ asset('images/page1_img7.png') }}" alt="Batik 2">
        <div class="nama-produk">Batik Motif Wakaroros</div>
        <div class="harga">Rp150.000</div>
      </div>
      <div class="katalog-item">
        <img src="{{ asset('images/page1_img8.png') }}" alt="Batik 3">
        <div class="nama-produk">Batik Pakis</div>
        <div class="harga">Rp300.000</div>
      </div>
      <div class="katalog-item">
        <img src="{{ asset('images/page1_img12.png') }}" alt="Batik 4">
        <div class="nama-produk">Batik Klasik</div>
        <div class="harga">Rp200.000</div>
      </div>
    </div>
  </div>
@endsection