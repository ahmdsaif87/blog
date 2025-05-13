<x-layout>
    <div class="space-y-6 px-4 mt-6">
        <h5 class="text-center text-lg font-medium">Jumlah blog: {{ count($blogs) }}</h5>
        <div class="space-y-4">
            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        </div>
    </div>
</x-layout>
