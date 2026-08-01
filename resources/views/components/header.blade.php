<nav id="main-nav"
    class="fixed top-0 z-50 w-full border-b border-white/10 bg-black/60 backdrop-blur-md transition-all duration-500">
    <div class="flex items-center justify-between px-6 py-4 md:hidden">
        <a href="{{ route('index') }}" class="shrink-0">
            <img src="/assets/images/24829593.webp" class="h-auto w-[160px]" alt="site logo">
        </a>

        <button id="menu-toggle" class="group flex flex-col items-center justify-center gap-1.5 p-2"
            aria-label="Toggle Menu" aria-expanded="false">
            <span
                class="h-0.5 w-6 origin-center bg-white transition-all duration-300 group-[.is-active]:translate-y-[8px] group-[.is-active]:rotate-45"></span>
            <span class="h-0.5 w-6 bg-white transition-all duration-300 group-[.is-active]:opacity-0"></span>
            <span
                class="h-0.5 w-6 origin-center bg-white transition-all duration-300 group-[.is-active]:-translate-y-[8px] group-[.is-active]:-rotate-45"></span>
        </button>
    </div>

    <div id="menu-content"
        class="invisible opacity-0 -translate-y-2 absolute left-0 top-full flex w-full flex-col items-center bg-black/95 
               transition-[opacity,visibility,transform] duration-300 
               md:visible md:opacity-100 md:translate-y-0 md:relative md:top-0 md:flex md:bg-transparent md:transition-none">

        <div
            class="flex w-full flex-col items-center justify-between border-white/20 px-8 py-4 font-['Space_Grotesk'] text-xs font-bold uppercase tracking-[0.2em] text-white md:flex-row md:border-b md:py-3">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-2">
                    <span class="material-symbols-outlined !text-base text-primary">thermostat</span> 78°F
                </span>
                <a href="tel:3055550199" class="flex items-center gap-2 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined !text-base text-primary">phone</span> 305-555-0199
                </a>
            </div>
            <div class="hidden md:block">
                <a href="{{ route('index') }}">
                    <img src="/assets/images/24829593.webp"
                        class="h-auto w-[220px] transition-transform duration-300 hover:scale-105" alt="site logo">
                </a>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="{{ route('vendor.application.create') }}"
                    class="neon-gradient rounded-full px-8 py-2.5 font-headline text-xs font-bold uppercase tracking-widest text-white transition-all hover:brightness-110 active:scale-95 shadow-lg">
                    Apply Now
                </a>
            </div>
        </div>

        <div
            class="flex w-full flex-col items-center justify-center gap-6 py-8 font-['Space_Grotesk'] text-sm font-medium tracking-widest text-white md:flex-row md:gap-10 md:py-4">
            @php
                $links = [
                    ['name' => 'Events', 'url' => route('events')],
                    ['name' => 'Dining', 'url' => route('food-drinks')],
                    ['name' => 'Contact', 'url' => route('contact')],
                    ['name' => 'Property', 'url' => route('property')],
                    ['name' => 'Reviews', 'url' => route('reviews')],
                    ['name' => 'Vendors', 'url' => route('vendor.application.create')],
                ];
            @endphp
            @foreach ($links as $link)
                <a href="{{ $link['url'] }}" class="relative group py-1 transition-colors hover:text-[#e41445]">
                    {{ $link['name'] }}
                    <span
                        class="absolute bottom-0 left-0 h-[1px] w-full origin-right scale-x-0 bg-[#e41445] transition-transform duration-300 group-hover:origin-left group-hover:scale-x-100"></span>
                </a>
            @endforeach
        </div>
    </div>
</nav>

<style>
    /* Custom State Class for Mobile Menu */
    #menu-content.is-open {
        visibility: visible !important;
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('menu-toggle');
        const menuContent = document.getElementById('menu-content');
        const nav = document.getElementById('main-nav');

        toggleBtn.addEventListener('click', () => {
            const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';

            // Toggle Accessibility & Hamburger Animation
            toggleBtn.setAttribute('aria-expanded', !isExpanded);
            toggleBtn.classList.toggle('is-active');

            // Toggle Visibility via single custom class
            menuContent.classList.toggle('is-open');
        });

        // Close menu if window is resized to desktop width (optional safety)
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                menuContent.classList.remove('is-open');
                toggleBtn.classList.remove('is-active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            }
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('py-0', 'bg-black/90');
            } else {
                nav.classList.remove('py-0', 'bg-black/90');
            }
        });
    });
</script>
