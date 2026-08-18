<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reserve')</title>
    <style>
        :root { color-scheme: light; font-family: Arial, sans-serif; }
        body { margin: 0; background: #f4f6f8; color: #1f2933; }
        main { width: min(900px, calc(100% - 32px)); margin: 40px auto; }
        header { background: #17324d; color: #fff; padding: 20px 0; }
        header .inner { width: min(900px, calc(100% - 32px)); margin: auto; display: flex; justify-content: space-between; align-items: center; gap: 16px; }
        header a { color: #fff; text-decoration: none; }
        h1 { margin-top: 0; }
        .panel { background: #fff; border: 1px solid #d9e0e7; border-radius: 6px; padding: 28px; box-shadow: 0 2px 8px rgb(23 50 77 / 8%); }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 24px; }
        .button { display: inline-block; border: 0; border-radius: 4px; padding: 10px 16px; background: #1769aa; color: #fff; text-decoration: none; cursor: pointer; font-size: 15px; }
        .button.secondary { background: #607080; }
        .button.danger { background: #b42318; }
        label { display: block; margin-bottom: 6px; font-weight: bold; }
        input { box-sizing: border-box; width: 100%; border: 1px solid #b8c4ce; border-radius: 4px; padding: 10px; font-size: 15px; }
        .field { margin-bottom: 18px; }
        .error { color: #b42318; font-size: 14px; margin: 6px 0 0; }
        .success { background: #e7f6ec; border: 1px solid #9ad4aa; color: #176b2c; padding: 12px 14px; border-radius: 4px; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #d9e0e7; }
        th { background: #eef2f5; }
        .detail { display: grid; grid-template-columns: 180px 1fr; gap: 12px; margin: 0; }
        .detail dt { font-weight: bold; }
        .detail dd { margin: 0; }
        @media (max-width: 600px) { .detail { grid-template-columns: 1fr; gap: 4px; } header .inner { align-items: flex-start; flex-direction: column; } }
    </style>
</head>
<body>
    <header>
        <div class="inner">
            <a href="{{ route('home') }}"><strong>Taller 01 - Reserve</strong></a>
            <a href="{{ route('reserves.index') }}">Ver reservas</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
