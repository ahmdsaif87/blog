<x-layout>
    <div class="space-y-6 px-4 mt-6">
        <h1 class="text-center text-lg font-medium">Jumlah blog: {{ count($blogs) }}</h1>
        <div class="space-y-4">
            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        </div>
    </div>
</x-layout>
