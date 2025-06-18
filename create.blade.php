<div class="mb-4">
    <label class="block mb-1">材料（複数選択）</label>
    <select name="ingredients[]" multiple class="w-full border px-3 py-2 rounded">
        @foreach ($ingredients as $ingredient)
            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
        @endforeach
    </select>
    <p class="text-sm text-gray-500">※ CtrlまたはCmdキーで複数選択</p>
</div>
