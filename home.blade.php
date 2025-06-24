@extends('layouts.app')

@section('content')
{{-- ヘッダー --}}
<div class="bg-gray-100 p-4 flex justify-between items-center">
    <div class="text-xl font-bold">🍴 MyRecipe</div>
    <div class="space-x-4">
        <a href="{{ route('recipes.create') }}" class="bg-white px-3 py-1 rounded border">レシピ投稿</a>
        <a href="{{ route('login') }}" class="bg-white px-3 py-1 rounded border">Login</a>
    </div>
</div>

{{-- 検索バー --}}
<div class="bg-gray-100 py-6 flex justify-center">
    <form method="GET" action="{{ route('recipes.index') }}" class="w-full max-w-md">
        <input type="text" name="keyword" placeholder="レシピを検索" class="w-full border rounded px-4 py-2" />
    </form>
</div>

{{-- レシピ一覧（3列） --}}
<div class="bg-gray-100 px-6 py-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($recipes as $recipe)
            <a href="{{ route('recipes.show', $recipe->id) }}" class="bg-white rounded shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('storage/' . $recipe->image_url) }}" alt="img" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold">{{ $recipe->title }}</h3>
                    <p class="text-sm text-gray-600">{{ Str::limit($recipe->description, 40) }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>

{{-- カテゴリ一覧 --}}
<div class="bg-white text-center py-8 border-t mt-6">
    <h2 class="text-lg font-semibold mb-4">カテゴリー</h2>
    <div class="flex flex-wrap justify-center gap-3 text-sm text-blue-600">
        @foreach ($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}" class="hover:underline">{{ $category->name }}</a>
        @endforeach
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
{{-- ヘッダー --}}
<div class="bg-gray-100 p-4 flex justify-between items-center">
    <div class="text-xl font-bold">🍴 MyRecipe</div>
    <div class="space-x-4">
        <a href="{{ route('recipes.create') }}" class="bg-white px-3 py-1 rounded border">レシピ投稿</a>
        <a href="{{ route('login') }}" class="bg-white px-3 py-1 rounded border">Login</a>
    </div>
</div>

{{-- 検索バー --}}
<div class="bg-gray-100 py-6 flex justify-center">
    <form method="GET" action="{{ route('recipes.index') }}" class="w-full max-w-md">
        <input type="text" name="keyword" placeholder="レシピを検索" class="w-full border rounded px-4 py-2" />
    </form>
</div>

{{-- レシピ一覧（3列） --}}
<div class="bg-gray-100 px-6 py-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($recipes as $recipe)
            <a href="{{ route('recipes.show', $recipe->id) }}" class="bg-white rounded shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('storage/' . $recipe->image_url) }}" alt="img" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold">{{ $recipe->title }}</h3>
                    <p class="text-sm text-gray-600">{{ Str::limit($recipe->description, 40) }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>

{{-- カテゴリ一覧 --}}
<div class="bg-white text-center py-8 border-t mt-6">
    <h2 class="text-lg font-semibold mb-4">カテゴリー</h2>
    <div class="flex flex-wrap justify-center gap-3 text-sm text-blue-600">
        @foreach ($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}" class="hover:underline">{{ $category->name }}</a>
        @endforeach
    </div>
</div>
@endsection
