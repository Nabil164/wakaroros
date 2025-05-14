<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Batik Wakaroros')</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
  <style>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #fffaf3;
      margin: 0;
      padding: 0;
      line-height: 1.6;
      color: #333;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 60px;
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #8B0000;
      font-weight: bold;
      font-size: 16px;
    }

    nav a:hover {
      color: #B22222;
      text-decoration: underline;
      transition: 0.3s;
    }

    .logo {
      font-family: 'Great Vibes', cursive;
      font-size: 42px;
      color: #8B0000;
    }

    section {
      max-width: 1100px;
      margin: auto;
      padding: 80px 20px;
      scroll-margin-top: 120px; /* jarak untuk sticky header */
    }

    .beranda {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }

    .beranda .judul {
      font-family: 'Great Vibes', cursive;
      font-size: 72px;
      color: black;
      flex: 1;
    }

    .beranda .gambar-kanan {
      flex: 1;
      max-width: 350px;
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h1, h2 {
      font-family: 'Playfair Display', serif;
      color: #8B0000;
    }

    h1 {
      font-size: 42px;
      margin-bottom: 16px;
    }

    h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .sejarah p, .nilai p {
      max-width: 700px;
    }

    .sejarah {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .nilai {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
    }

    .nilai-kiri {
      flex: 1;
      min-width: 300px;
    }

    .nilai-kiri h3 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .nilai-item {
      margin-bottom: 30px;
    }

    .nilai-kanan {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .gambar-kotak {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      max-width: 600px;
    }

    .gambar-kotak img {
      flex: 1 1 260px;
      height: 260px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .katalog {
      text-align: center;
    }

    .katalog-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }

    .katalog-grid div {
      width: 200px;
    }

    .katalog-grid img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .kontak {
      text-align: center;
    }

    .kontak img {
      width: 280px;
      margin: 30px 0;
      border-radius: 12px;
    }

    .kontak p {
      margin: 10px 0;
      font-size: 18px;
    }

    .kontak a {
      text-decoration: none;
    }

    .footer {
      text-align: center;
      padding: 24px;
      background-color: #f5eee5;
      font-size: 14px;
      color: #666;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 20px;
      }

      .beranda {
        text-align: center;
      }

      .beranda .judul {
        font-size: 48px;
      }

      .katalog-grid {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
  </style>
</head>
<body>
  <header>
    <div class="logo">Batik Wakaroros</div>
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#sejarah">Sejarah</a>
      <a href="#nilai">Nilai</a>
      <a href="#katalog">Katalog</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

  @yield('content')
</body>
</html>
