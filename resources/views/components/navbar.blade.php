<div class="relative">
    <nav class="fixed top-0 w-full z-50 border-b border-[var(--color-border)] dark:border-[var(--color-border)] shadow bg-[var(--color-bg)/80] backdrop-blur-md">
        <div class="max-w-full mx-auto px-4 py-3 flex justify-between items-center">
            <div class="">
                <i class="fa-solid fa-code"></i>
                <a href="/" class="font-bold">ahmdsaif</a>
            </div>

            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="hover:text-[var(--color-link-hover)]">Home</a>
                <a href="/projects" class="hover:text-[var(--color-link-hover)]">Projects</a>
                <a href="/blog" class="hover:text-[var(--color-link-hover)]">Blog</a>
                <a href="/contact" class="hover:text-[var(--color-link-hover)]">Contact</a>
                <a href="/about" class="hover:text-[var(--color-link-hover)]">About</a>
            </div>

            <div class="flex items-center space-x-4">
                <button id="theme-toggle"
                    class="px-3 py-1 rounded-md border bg-[var(--color-bg)] text-[var(--color-text)] border-[var(--color-border)]"
                    aria-label="Toggle dark mode">
                    <span id="theme-icon">🌙</span>
                    <span id="theme-text">Dark</span>
                </button>

                <!-- Hamburger Button -->
                <button id="mobile-menu-toggle" class="p-2 rounded md:hidden">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-[var(--color-bg)] border border-[var(--color-border)] shadow-md rounded-b-lg md:hidden">
            <div class="px-4 py-4 space-y-2">
                <a href="/" class="block py-2">Home</a>
                <a href="/projects" class="block py-2">Projects</a>
                <a href="/blog" class="block py-2">Blog</a>
                <a href="/contact" class="block py-2">Contact</a>
                <a href="/about" class="block py-2">About</a>
            </div>
        </div>
    </nav>
</div>
