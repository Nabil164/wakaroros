<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Batik Wakaroros')</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@600&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <style>
    :root {
      --maroon: #8B0000;
      --gold: #B8860B;
      --cream: #fffaf3;
      --dark: #2d1a0b;
    }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Montserrat', Arial, sans-serif;
      background: var(--cream);
      margin: 0; padding: 0; color: #333;
    }
    header {
      position: sticky; top: 0; z-index: 1000;
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(8px);
      box-shadow: 0 2px 12px rgba(0,0,0,0.06);
      display: flex; align-items: center; justify-content: space-between;
      padding: 18px 60px;
    }
    .logo {
      font-family: 'Great Vibes', cursive;
      font-size: 2.3rem;
      color: var(--maroon);
      letter-spacing: 2px;
      cursor: pointer;
      transition: color 0.3s;
    }
    .logo:hover { color: var(--gold);}
    nav {
      display: flex; gap: 18px;
    }
    nav a {
      color: var(--maroon);
      text-decoration: none;
      font-weight: 700;
      font-size: 1rem;
      position: relative;
      padding: 4px 0;
      transition: color 0.3s;
      letter-spacing: 1px;
    }
    nav a::after {
      content: "";
      display: block;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--gold), var(--maroon));
      transition: width .3s;
      position: absolute;
      left: 0; bottom: -2px;
      border-radius: 2px;
    }
    nav a:hover, nav a.active { color: var(--gold);}
    nav a:hover::after, nav a.active::after { width: 100%; }
    /* Hero */
    .hero {
      background: url('{{ asset('images/page1_img5.jpeg') }}') center/cover no-repeat;
      min-height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      color: #fff;
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(120deg, rgba(139,0,0,0.7) 60%, rgba(184,134,11,0.5) 100%);
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      max-width: 700px;
      margin: 0 auto;
    }
    .hero-title {
      font-family: 'Great Vibes', cursive;
      font-size: 3.5rem;
      margin-bottom: 10px;
      color: #fffbe6;
      text-shadow: 2px 2px 8px #8B0000;
    }
    .hero-tagline {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      margin-bottom: 30px;
      color: #fffbe6;
      text-shadow: 1px 1px 4px #8B0000;
    }
    .cta-btn {
      display: inline-block;
      background: linear-gradient(90deg, var(--gold), var(--maroon));
      color: #fff;
      padding: 14px 36px;
      border-radius: 30px;
      font-size: 1.1rem;
      font-weight: bold;
      text-decoration: none;
      box-shadow: 0 2px 8px #b8860b33;
      transition: background 0.3s, transform 0.2s;
      letter-spacing: 1px;
      margin-top: 10px;
    }
    .cta-btn:hover {
      background: linear-gradient(90deg, var(--maroon), var(--gold));
      transform: scale(1.07);
    }
    /* Keunggulan */
    .features {
      max-width: 1100px;
      margin: 60px auto 0 auto;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
      text-align: center;
    }
    .feature-box {
      background: #fffbe6;
      border-radius: 16px;
      box-shadow: 0 2px 8px #b8860b22;
      padding: 32px 24px;
      flex: 1 1 260px;
      min-width: 220px;
      max-width: 320px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .feature-box:hover {
      transform: translateY(-8px) scale(1.04);
      box-shadow: 0 8px 24px #b8860b33;
    }
    .feature-box i {
      font-size: 2.2rem;
      color: var(--gold);
      margin-bottom: 12px;
    }
    .feature-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.2rem;
      color: var(--maroon);
      margin-bottom: 10px;
      font-weight: bold;
    }
    /* Katalog */
    .katalog-section {
      max-width: 1100px;
      margin: 60px auto;
      text-align: center;
    }
    .katalog-title {
      font-family: 'Playfair Display', serif;
      color: var(--maroon);
      font-size: 2rem;
      margin-bottom: 30px;
    }
    .katalog-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 20px;
    }
    .katalog-item {
      width: 200px;
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 2px 8px #b8860b22;
      padding: 16px;
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center; /* Center text alignment */
    }
    .katalog-item:hover {
      transform: translateY(-8px) scale(1.04);
      box-shadow: 0 8px 24px #b8860b33;
    }
    .katalog-item img {
      width: 100%;
      border-radius: 12px;
      margin-bottom: 10px;
    }
    .katalog-item .nama-produk {
      font-weight: bold;
      color: var(--maroon);
      margin-bottom: 4px;
    }
    .katalog-item .harga {
      color: var(--gold);
      font-weight: bold;
      font-size: 1rem;
    }
    /* Testimoni */
    .testimoni-section {
      background: #f5eee5;
      padding: 60px 0;
      margin-top: 60px;
    }
    .testimoni-title {
      font-family: 'Playfair Display', serif;
      color: var(--maroon);
      font-size: 2rem;
      text-align: center;
      margin-bottom: 30px;
    }
    .testimoni-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }
    .testimoni-item {
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 2px 8px #b8860b22;
      padding: 24px 18px;
      max-width: 320px;
      min-width: 220px;
      font-size: 1rem;
      position: relative;
    }
    .testimoni-item .fa-quote-left {
      color: var(--gold);
      font-size: 1.2rem;
      margin-right: 6px;
    }
    .testimoni-item .nama {
      font-weight: bold;
      color: var(--maroon);
      margin-top: 12px;
      font-size: 1.05rem;
    }
    /* Kontak */
    .kontak-section {
      max-width: 700px;
      margin: 60px auto;
      background: #fffbe6;
      border-radius: 16px;
      box-shadow: 0 2px 8px #b8860b22;
      padding: 40px 24px;
      text-align: center;
    }
    .kontak-title {
      font-family: 'Playfair Display', serif;
      color: var(--maroon);
      font-size: 2rem;
      margin-bottom: 20px;
    }
    .kontak-info {
      font-size: 1.1rem;
      margin-bottom: 18px;
    }
    .kontak-info i {
      color: var(--gold);
      margin-right: 8px;
    }
    .kontak-section a {
      color: var(--maroon);
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }
    .kontak-section a:hover { color: var(--gold);}
    /* Footer */
    .footer {
      text-align: center;
      padding: 32px;
      background: var(--dark);
      font-size: 1rem;
      color: #fffbe6;
      letter-spacing: 1px;
      border-top: 4px solid var(--gold);
      margin-top: 60px;
    }
    .footer .sosmed {
      margin-top: 12px;
    }
    .footer .sosmed a {
      display: inline-block;
      margin: 0 8px;
      color: #fffbe6;
      font-size: 22px;
      transition: color 0.3s;
    }
    .footer .sosmed a:hover { color: var(--gold);}
    /* Responsive */
    @media (max-width: 900px) {
      header { padding: 14px 18px;}
      .hero-title { font-size: 2.2rem;}
      .hero-tagline { font-size: 1.1rem;}
      .features { flex-direction: column; gap: 18px;}
      .katalog-grid { gap: 16px;}
      .testimoni-list { gap: 16px;}
    }
    @media (max-width: 600px) {
      .logo { font-size: 1.3rem;}
      nav { gap: 8px;}
      .hero-title { font-size: 1.2rem;}
      .hero-tagline { font-size: 0.9rem;}
      .katalog-item { width: 100%;}
      .testimoni-item { min-width: 100px;}
    }
  </style>
</head>
<body>
  <header>
    <div class="logo" onclick="window.scrollTo({top:0,behavior:'smooth'})">Batik Wakaroros</div>
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#keunggulan">Keunggulan</a>
      <a href="#katalog">Katalog</a>
      <a href="#testimoni">Testimoni</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

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

</body>
</html>
