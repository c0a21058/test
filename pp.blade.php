<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>レシピサイト</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-white shadow p-4 mb-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">🍳 My Recipes</h1>
            <nav>
                <a href="/" class="mr-4 hover:underline">ホーム</a>
                <a href="/recipes/create" class="text-blue-600 hover:underline">レシピ投稿</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 mt-10 mb-4">
        &copy; 2025 My Recipe App
    </footer>
</body>
</html>
