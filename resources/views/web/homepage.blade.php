<x-layout>
    {{-- Hero Section --}}
    <div class="flex space-x-4 mb-6">
        <img src="{{ asset('profile.jpg') }}" alt="Profile" class="w-20 h-20 rounded-full mt-7">
        <div>
            <h1 class="text-2xl font-bold">Ahmad Saifi Khayatu Ulumuddin</h1>
            <p class="text-sm">Learning and building web dev skills</p>
        </div>
    </div><hr>

    <div class="text-justify space-y-4 mb-12">
        <h3 class="mt-5">
            Hey there! 👋
        </h3>
        <p>
            I’m Saif, a university student who’s just starting out in the world of coding, driven by curiosity and the excitement of turning ideas into reality.
        </p>
        <blockquote class="border-l-4 border-[var(--color-border)] pl-4 italic text-[var(--color-text)]">
            "The only way to do great work is to love what you do." – Steve Jobs
        </blockquote>
        <p>
            I’m also a huge football fan, and FC Barcelona has always been a source of inspiration for me. Just like in football—where progress comes from practice, teamwork, and persistence—I believe learning to code is a journey of small wins and constant improvement.
        </p>
        <blockquote class="border-l-4 border-[var(--color-border)] pl-4 italic text-[var(--color-text)]">
            "You have to fight to reach your dream. You have to sacrifice and work hard for it." -Lionel Messi
        </blockquote>
        <p>
            I may be at the beginning of my coding journey, but I’m eager to learn, grow, and build things step by step. Because in the end, passion and dedication make all the difference. 💙❤️
        </p>
    </div>
    {{-- Hero Section End --}}

    {{-- Project Section --}}
    <div class="">
        <h1 class="text-3xl font-bold mb-6">Latest Project</h1>
        
    </div>
    {{-- Project Section End --}}

    {{-- Blog Section --}}
    <div class="">
        <h1 class="text-3xl font-bold mb-6">Latest Blog</h1>
        <x-card :blogs="$blogs"/>
        <a href="/blog" class="text-blue-600 hover:underline mt-4 block">See All</a>
    </div>
    {{-- Blog Section End --}}
</x-layout>
