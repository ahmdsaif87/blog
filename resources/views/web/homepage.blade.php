<x-layout>
    {{-- Hero Section --}}
    <section class="flex space-x-4 py-9">
        <img src="{{ asset('profile.jpg') }}" alt="Profile" class="w-20 h-20 rounded-full">
        <div>
            <p class="text-2xl font-bold">Ahmad Saifi Khayatu Ulumuddin</p>
            <p class="text-sm">Learning and building web dev skills</p>
        </div>
    </section>

    <section class="text-justify space-y-4 mb-12 max-w-full mx-auto">
        <h3 class="mt-5">Hey there! 👋</h3>
        <blockquote class="border-l-4 border-[var(--color-border)] pl-4 italic text-[var(--color-text)]">
            I'm Saif, a college student who is passionate about coding, web development, and tech. Always curious,
            always building. 🚀

            When I’m not coding, I’m probably watching an FC Barcelona match. Just like in football, coding is all about
            practice, teamwork, and persistence! ⚽💻

            Let’s connect and build something awesome together!
        </blockquote>
    </section>
    {{-- Hero Section End --}}

    {{-- Tech Stack Section --}}

    {{-- Tech Stack Section End --}}

    {{-- Project Section --}}

    {{-- Project Section End --}}

    {{-- Blog Section --}}
    <section class="mb-12">
        <h3 class="mt-5">Latest Blog</h3>

        @if ($latestBlog)
            <x-blog-card :blog="$latestBlog" />
        @else
            <p class="text-gray-500">No blog post available.</p>
        @endif

        <a href="/blog" class="text-blue-600 hover:underline mt-4 block">See All</a>
    </section>
    {{-- Blog Section End --}}
</x-layout>
