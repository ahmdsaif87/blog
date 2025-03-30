document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const themeText = document.getElementById("theme-text");
    const themeIcon = document.getElementById("theme-icon");
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    // === DARK MODE TOGGLE ===
    const isDarkMode = localStorage.getItem("theme") === "dark";
    document.documentElement.classList.toggle("dark", isDarkMode);
    updateThemeButton(isDarkMode);

    themeToggle.addEventListener("click", () => {
        const isDark = document.documentElement.classList.toggle("dark");
        localStorage.setItem("theme", isDark ? "dark" : "light");
        updateThemeButton(isDark);

        document.documentElement.style.backgroundColor = isDark ? "#000000" : "#ffffff";
    });

    function updateThemeButton(isDark) {
        themeText.textContent = isDark ? "Light" : "Dark";
        themeIcon.textContent = isDark ? "☀️" : "🌙";
    }

    // === MOBILE MENU TOGGLE ===
    mobileMenuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", (event) => {
        if (!mobileMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
            mobileMenu.classList.add("hidden");
        }
    });
});
