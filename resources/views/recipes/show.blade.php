<x-app-layout>
    <div class="w-10/12 p-4 mx-auto bg-white rounded">
        {{ Breadcrumbs::render('show', $recipe) }}
        <div class="grid grid-cols-2 rounded border border-gray-500 mt-4">
            <div class="col-span-1">
                <img class="object-cover w-full aspect-square" src="{{ $recipe['image'] }}" alt="{{ $recipe['title'] }}">
            </div>
            <div class="col-span-1">
                <p>{{ $recipe['description'] }}</p>
                <p>ユーザー名</p>
                <h4 class="text-2xl font-bold mb-2">材料</h4>
            </div>
        </div>
    </div>
</x-app-layout>
