@props(['blog'])

<div class="w-full max-w-4xl bg-[var(--color-bg)] border border-[var(--color-border)] dark:border-[var(--color-border)] dark:bg-[var(--color-bg)] rounded-xl shadow-md p-6 mx-auto">
    <h2 class="text-2xl font-semibold text-[var(--color-text)] dark:text-[var(--color)] mb-2 mt-0">
        {{ str_replace('_', ' ', $blog['title']) }}
    </h2>
    <p class="text-[var(--color-text)] dark:text-[var(--color)] text-sm mb-2">
        {{ $blog['created_at'] ?? 'Tanggal tidak tersedia' }}
    </p>

    {{-- Ringkasan konten --}}
    <p class="text-[var(--color-text)] dark:text-[var(--color)] text-base mb-4">
        {{ Str::words(strip_tags($blog['content']), 15, '...') }}
    </p>

    <a href="/blog/{{ $blog['slug'] }}" class="text-blue-600 hover:underline text-sm font-medium">Read More</a>
</div>
