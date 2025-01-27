<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manajemen Proyek')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Sesuaikan jika ada CSS -->
</head>
<body>
    <header>
        <h1>Manajemen Proyek</h1>
        <nav>
            <a href="{{ route('projects.index') }}">Home</a>
            <a href="{{ route('projects.create') }}">Tambah Proyek</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Manajemen Proyek</p>
    </footer>
</body>
</html>
