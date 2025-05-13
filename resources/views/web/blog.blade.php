<x-layout>
    <div class="space-y-6 px-4 mt-6">
        <h4 class="text-center">Numbers of blogs: {{ count($blogs) }}</h4>
        <div class="space-y-4">
            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        </div>
    </div>
</x-layout>
