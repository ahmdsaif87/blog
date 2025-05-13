<x-layout>
    <div class="flex flex-col items-center mx-auto mt-6 gap-8">
        <div class="space-y-4 mt-6">
            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        </div>
    </div>
</x-layout>
