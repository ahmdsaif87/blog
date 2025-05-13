@props(['blog'])

<a href="/blog/{{ $blog['slug'] }}" class="flex flex-col items-center bg-[var(--color-bg)] border border-[var(--color-border)] rounded-lg shadow-sm md:flex-row w-full hover:shadow-lg dark:border-[var(--color-border)] dark:bg-[var(--color-bg)] shadow-lg hover:shadow-lg">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-[var(--color-text)] dark:text-[var(--color)]">{{ str_replace('_', ' ', $blog['title']) }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::words(strip_tags($blog['content']), 20, '...') }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm">
            {{ $blog['created_at'] ?? 'Tanggal tidak tersedia' }}
        </p>
    </div>
</a>
