<footer class="bg-secondary w-full py-12 px-8 border-t border-outline-variant/20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 site_width mx-auto">
        <div class="col-span-1 md:col-span-1">
            <div><img src="/assets/images/24829593.webp" class="w-[200px] h-auto" alt="site logo"></div>
            <p class="text-sm tracking-wide mt-4 text-white">
                1020 Ocean Dr.
            </p>
            <p class="text-sm tracking-wide mt-1 text-white">
                Miami Beach, Florida 33139
            </p>
        </div>

        <div class="col-span-1">
            <h4 class="font-headline font-bold text-xs uppercase tracking-widest mb-6 text-white">Explore</h4>
            <ul class="space-y-4 text-sm tracking-wide">
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('index') }}">Home</a></li>
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('events') }}">Events</a></li>
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('food-drinks') }}">Food & Drinks</a></li>
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('property') }}">Property</a></li>
            </ul>
        </div>

        <div class="col-span-1">
            <h4 class="font-headline font-bold text-xs uppercase tracking-widest mb-6 text-white">Links</h4>
            <ul class="space-y-4 text-sm tracking-wide">
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('reviews') }}">Reviews</a></li>
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('contact') }}">Contact</a></li>
                <li><a class="text-white hover:text-primary-container underline-offset-4 hover:underline"
                        href="{{ route('vendor.application.create') }}" target="_blank">Vendor Registration</a></li>
            </ul>
        </div>

        <div class="col-span-1">
            <h4 class="font-headline font-bold text-xs uppercase tracking-widest mb-6 text-white">Connect</h4>
            <div class="flex gap-4">
                <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all"
                    href="#">
                    <span class="material-symbols-outlined text-sm">public</span>
                </a>
                <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all"
                    href="#">
                    <span class="material-symbols-outlined text-sm">share</span>
                </a>
            </div>
        </div>
    </div>

    <div class="site_width mx-auto mt-20 pt-8 border-t border-outline-variant">
        <p class="text-xs tracking-[0.2em] text-white uppercase">
            © 2026. ALL RIGHTS RESERVED.
        </p>
    </div>
</footer>
