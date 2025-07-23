<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow px-4 py-3">
        <div class="container mx-auto">
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">Accueil</a>
        </div>
    </nav>

    <main class="container mx-auto mt-6">
        @yield('content')
    </main>
</body>
</html>
