<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
        body { background: #f5f5f5; }
        .sidebar {
            background: #8B0000;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0; left: 0;
            width: 220px;
            padding-top: 30px;
            box-shadow: 2px 0 12px #b8860b22;
        }
        .sidebar .logo {
            font-size: 2rem;
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            color: #fffbe6;
            letter-spacing: 2px;
        }
        .sidebar a {
            color: #fffbe6;
            text-decoration: none;
            padding: 12px 28px;
            display: block;
            font-size: 1.1rem;
            border-left: 4px solid transparent;
            transition: background 0.2s, border-color 0.2s, color 0.2s;
            margin-bottom: 6px;
        }
        .sidebar a.active, .sidebar a:hover {
            background: #B8860B;
            color: #fff;
            border-left: 4px solid #fff;
        }
        .main {
            margin-left: 240px;
            padding: 40px 30px 30px 30px;
            min-height: 100vh;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .admin-header h1 {
            color: #8B0000;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin: 0;
        }
        .admin-header .admin-name {
            font-weight: bold;
            color: #8B0000;
            font-size: 1.1rem;
        }
        @media (max-width: 900px) {
            .sidebar { width: 100vw; height: auto; position: static; display: flex; flex-direction: row; padding: 0;}
            .sidebar .logo { display: none;}
            .sidebar a { flex: 1; text-align: center; border-left: none; border-bottom: 4px solid transparent; }
            .sidebar a.active, .sidebar a:hover { border-left: none; border-bottom: 4px solid #fff; }
            .main { margin-left: 0; padding: 20px 4vw;}
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">Batik Wakaroros</div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa-solid fa-shirt"></i> Produk</a>
        <a href="#"><i class="fa-solid fa-users"></i> Pelanggan</a>
        <a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>
    <div class="main">
        <div class="admin-header">
            <h1>@yield('title', 'Dashboard')</h1>
            <span class="admin-name">Admin Wakaroros</span>
        </div>
        @yield('content')
    </div>
</body>
</html>