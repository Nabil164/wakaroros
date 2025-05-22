@extends('layouts.app')

@section('title', 'Batik Wakaroros')

@section('content')
  <!-- Hero Section -->
  <div class="hero" id="beranda">
    <div class="hero-content">
      <div class="hero-title">Batik Wakaroros</div>
      <div class="hero-tagline">Batik Khas Nusantara, Perpaduan Tradisi & Modernitas. Temukan koleksi terbaik kami yang penuh makna dan cerita budaya.</div>
      <a href="#katalog" class="cta-btn">Lihat Katalog</a>
    </div>
  </div>

  <!-- Keunggulan -->
  <div class="features" id="keunggulan">
    <div class="feature-box">
      <i class="fa-solid fa-leaf"></i>
      <div class="feature-title">Motif Eksklusif</div>
      <div>Setiap motif batik kami dirancang khusus, terinspirasi dari kekayaan budaya lokal.</div>
    </div>
    <div class="feature-box">
      <i class="fa-solid fa-paint-brush"></i>
      <div class="feature-title">Pewarna Alami</div>
      <div>Menggunakan bahan pewarna alami yang ramah lingkungan dan aman untuk kulit.</div>
    </div>
    <div class="feature-box">
      <i class="fa-solid fa-award"></i>
      <div class="feature-title">Kualitas Premium</div>
      <div>Bahan kain pilihan, jahitan rapi, dan detail motif yang halus.</div>
    </div>
    <div class="feature-box">
      <i class="fa-solid fa-truck-fast"></i>
      <div class="feature-title">Pengiriman Cepat</div>
      <div>Pesanan Anda akan diproses dan dikirim dengan cepat ke seluruh Indonesia.</div>
    </div>
  </div>

  <!-- Katalog -->
  <div class="katalog-section" id="katalog">
    <div class="katalog-title">Katalog Batik Wakaroros</div>
    <div class="katalog-grid">
      @foreach($products as $product)
        <div class="katalog-item">
          <img src="{{ asset('storage/'.$product->gambar) }}" alt="{{ $product->nama }}">
          <div class="nama-produk">{{ $product->nama }}</div>
          <div class="harga">Rp{{ number_format($product->harga, 0, ',', '.') }}</div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Testimoni -->
  <div class="testimoni-section" id="testimoni">
    <div class="testimoni-title">Apa Kata Pelanggan Kami?</div>
    <div class="testimoni-list">
      <div class="testimoni-item">
        <i class="fa-solid fa-quote-left"></i>
        Batiknya sangat halus dan motifnya unik, saya suka sekali! Pengiriman juga cepat.
        <div class="nama">- Sari, Jakarta</div>
      </div>
      <div class="testimoni-item">
        <i class="fa-solid fa-quote-left"></i>
        Kualitas premium, cocok untuk acara formal maupun santai. Terima kasih Batik Wakaroros!
        <div class="nama">- Budi, Surabaya</div>
      </div>
      <div class="testimoni-item">
        <i class="fa-solid fa-quote-left"></i>
        Motifnya benar-benar khas, beda dari yang lain. Recommended!
        <div class="nama">- Lina, Makassar</div>
      </div>
    </div>
  </div>

  <!-- Kontak -->
  <div class="kontak-section" id="kontak">
    <div class="kontak-title">Hubungi Kami</div>
    <div class="kontak-info"><i class="fa-solid fa-phone"></i> 0811-541-3333</div>
    <div class="kontak-info"><i class="fa-solid fa-envelope"></i> juwita_batik@gmail.com</div>
    <div class="kontak-info"><i class="fa-brands fa-instagram"></i> @juwitabatik_kabojayasgt</div>
    <div style="margin-top:18px;">
      <a href="https://wa.me/62811541333" target="_blank" class="cta-btn" style="font-size:1rem;padding:10px 28px;">Chat WhatsApp</a>
    </div>
  </div>
@endsection