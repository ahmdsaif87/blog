<x-layout>
    {{-- Hero Section --}}
    <section class="flex space-x-4 py-8">
        <img src="{{ asset('profile.jpg') }}" alt="Profile" class="w-20 h-20 rounded-full">
        <div>
            <p class="text-2xl font-bold">Ahmad Saifi Khayatu Ulumuddin</p>
            <p class="text-sm">Learning and building web dev skills</p>
        </div>
    </section>

    <section class="text-justify space-y-4 mb-12">
        <h3 class="mt-5">Hey there! 👋</h3>
        <blockquote class="border-l-4 border-[var(--color-border)] pl-4 italic text-[var(--color-text)]">
            I'm Saif, a college student who is passionate about coding, web development, and tech. Always curious, always building. 🚀

            When I’m not coding, I’m probably watching an FC Barcelona match. Just like in football, coding is all about practice, teamwork, and persistence! ⚽💻

            Let’s connect and build something awesome together!
        </blockquote>
    </section>
    {{-- Hero Section End --}}

    {{-- Tech Stack Section --}}
    <section class="text-justify space-y-4 mb-12">
        <h3 class="mt-5">Tech Stack</h3>
        <div class="text-[var(--color-text)] flex flex-wrap gap-2">
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">Laravel</span>
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">Tailwind CSS</span>
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">Node.js</span>
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">Bootstrap</span>
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">PHP</span>
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">MySQL</span>
            <span class="px-3 py-1 border-2 border-[var(--color-border)] rounded-lg">Git</span>
        </div>
    </section>
    {{-- Tech Stack Section End --}}

    {{-- Project Section --}}
    <section class="mb-12">
        <h3 class="mt-5">Latest Project</h3>
        <!-- Project content here -->
    </section>
    {{-- Project Section End --}}

    {{-- Blog Section --}}
    <section class="mb-12">
        <h3 class="mt-5">Latest Blog</h3>
        <x-card :blogs="$blogs"/>
        <a href="/blog" class="text-blue-600 hover:underline mt-4 block">See All</a>
    </section>
    {{-- Blog Section End --}}
</x-layout>
