@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-4 bg-gray-100 rounded shadow">

    {{-- レシピ画像 --}}
    <div class="mb-6">
        <img src="{{ asset('storage/' . $recipe->image_url) }}" alt="レシピ画像" class="w-full h-80 object-cover rounded">
    </div>

    {{-- 下段：材料 + 作り方 --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- 材料 --}}
        <div class="md:col-span-1 bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-2">材料</h2>
            <ul class="list-disc pl-5 space-y-1 text-sm">
                @foreach ($recipe->ingredients as $ingredient)
                    <li>{{ $ingredient->name }}：{{ $ingredient->amount }}</li>
                @endforeach
            </ul>
        </div>

        {{-- 作り方 --}}
        <div class="md:col-span-2 bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-4">作り方</h2>
            @foreach ($recipe->steps as $step)
                <div class="mb-6">
                    <p class="font-semibold mb-2">手順 {{ $step->step_number }}</p>
                    @if ($step->image_url)
                        <img src="{{ asset('storage/' . $step->image_url) }}" class="w-full h-48 object-cover rounded mb-2" alt="手順画像">
                    @endif
                    <p class="text-sm">{{ $step->description }}</p>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
