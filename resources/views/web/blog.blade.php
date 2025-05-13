<x-layout>
    <div class="flex flex-col items-center mx-auto mb-6 gap-5 mt-6">
        <h4 class="text-center">Numbers of blogs: {{ count($blogs) }}</h4>
        <div class="space-y-4">
            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        </div>
    </div>
</x-layout>
