<div class="flex flex-wrap gap-8">
    @props(['blogs'])
    @foreach ($blogs as $blog)
        @php
            $firstLine = explode("\n", trim($blog['content']))[0];
            $firstLine = strip_tags(\Illuminate\Support\Str::of($firstLine)->markdown());
        @endphp
        <div
            class="max-w-full p-6 bg-[var(--color-bg)] dark:bg-[var(--color-bg)] border border-[var(--color-border)] rounded-lg shadow-sm hover:shadow-lg">
            <a href="{{ url('/blog/' . Str::slug($firstLine)) }}">
                <h5 class="mb-2 text-xl font-semibold tracking-tight">{{ $firstLine }}</h5>
            </a>
            <p class="mb-3 text-sm text-gray-400">{{ Str::limit(strip_tags($blog['content']), 100) }}</p>
            <a href="{{ url('/blog/' . Str::slug($firstLine)) }}"
                class="inline-flex text-sm items-center text-blue-600 hover:underline">
                Read More
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
        </div>
    @endforeach
</div>
