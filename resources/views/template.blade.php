<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Biodata')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #300964;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
            color: #ffffff;
            text-align: center;
        }

        .biodata {
            margin-top: 20px;
        }

        .biodata p {
            font-size: 18px;
            margin: 5px 0;
        }

        .biodata strong {
            font-weight: bold;
            color: #c3df49;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>@yield('header', 'My Biodata')</h1>
        </header>
        <nav>
            <!-- Tambahkan menu navigasi di sini jika diperlukan -->
        </nav>
        <main>
            @yield('content')
        </main>
        <footer>
            <!-- Tambahkan footer di sini jika diperlukan -->
        </footer>
    </div>
</body>
</html>
