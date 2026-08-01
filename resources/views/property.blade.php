@extends('layouts.app')

@section('title', 'Our Property | Clevelander South Beach')

@section('content')
    <x-page-hero bg="/assets/images/25117753.webp" title="Get to Know Clevelander"
        subtitle="Join us for curated nights of music and culture." />
    <!-- Introduction Section -->
    <section class="py-20 px-4 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-clevelander-pink font-semibold tracking-widest text-sm mb-4">SOUTH BEACH'S DESTINATION PARTY HOTEL
            </p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                WHERE THE ENERGY OF OCEAN DRIVE LIVES
            </h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                Since 1938, Clevelander has stood at the center of Ocean Drive — not just as an Art Deco landmark, but as
                one of South Beach's most iconic entertainment destinations. Fully reimagined for modern Miami, Clevelander
                isn't simply a place to stay. It's where the scene happens.
            </p>
            <p class="text-gray-600 leading-relaxed mb-8">
                If you're coming to South Beach for music, crowds, DJs, and unforgettable nights, you're in the right
                place.<br>
                This is not a quiet retreat.<br>
                This is intentional immersion.
            </p>
            <a href="{{ route('contact') }}"
                class="border-2 border-clevelander-pink text-clevelander-pink hover:bg-clevelander-pink hover:text-white px-8 py-3 rounded-full font-semibold transition">
                CONTACT US
            </a>
        </div>
    </section>

    <!-- In The Middle Section -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="site_width mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <p class="text-clevelander-pink font-semibold tracking-widest text-sm mb-2">IN THE MIDDLE</p>
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">OF IT ALL</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Located directly on Ocean Drive and steps from Lummus Park and the Atlantic Ocean, Clevelander
                        places you at the epicenter of Miami Beach nightlife.
                    </p>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-clevelander-pink"></i>
                            <span>No rideshares.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-clevelander-pink"></i>
                            <span>No long walks.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-clevelander-pink"></i>
                            <span>No watching from across the street.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-clevelander-pink"></i>
                            <span>When you stay here, you're already inside the action.</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="/assets/images/25118952.webp" alt="Clevelander Pool Deck"
                        class="rounded-lg shadow-xl w-full h-96 object-cover">
                </div>
            </div>

            <!-- Two Column Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <div>
                    <img src="/assets/images/25119081.webp" alt="Pool Party"
                        class="rounded-lg shadow-xl w-full h-72 object-cover mb-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">WEEKLY + SPECIAL EVENTS</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        There's always something happening at Clevelander South Beach that'll blow your mind. From weekly
                        Beach Club parties to cocktails and dancing under the stars at C-LEVEL, the fun never stops—and
                        neither does the party!
                    </p>
                </div>
                <div>
                    <img src="/assets/images/27295919.webp" alt="Football"
                        class="rounded-lg shadow-xl w-full h-72 object-cover mb-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">FOOTBALL HEADQUARTERS</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Clevelander is your ultimate Football Headquarters this season, bringing every game to life with
                        massive screens, booming sound, DJs, drink specials, and nonstop energy right on South Beach.
                        Whether you're cheering on your team or just here for the game-day vibes, there's no better place to
                        catch all the action poolside or on the rooftop. From kickoffs to championships, every game feels
                        bigger at Clevelander.
                    </p>
                </div>
            </div>

            <!-- Press Room Section -->
            <div class="mb-16">
                <div class="relative mb-8">
                    <img src="/assets/images/25119119.webp" alt="South Beach Sign"
                        class="rounded-lg shadow-xl w-full h-[32rem] object-cover">
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">PRESS ROOM</h3>
                <p class="text-gray-600 leading-relaxed mb-6 max-w-3xl">
                    Let's share the good news about Clevelander South Beach. We've collected all sorts of bits of
                    information about us, from press releases to news articles and more. Everything's in one spot for your
                    convenience.
                </p>
            </div>

            <!-- Gallery Section -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">WHERE ICONIC MEMORIES ARE MADE</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    <div class="col-span-2 row-span-2">
                        <img src="/assets/images/25119424.webp"
                            alt="Gallery 1" class="rounded-lg shadow-lg w-full h-full object-cover min-h-[400px]">
                    </div>
                    <div>
                        <img src="/assets/images/25119420.webp"
                            alt="Gallery 2" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    </div>
                    <div>
                        <img src="/assets/images/25119421.webp"
                            alt="Gallery 3" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    </div>
                    <div>
                        <img src="/assets/images/25119423.webp"
                            alt="Gallery 4" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    </div>
                    <div>
                        <img src="/assets/images/25119422.webp"
                            alt="Gallery 5" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    </div>
                    <div class="col-span-2">
                        <img src="/assets/images/25119416.webp"
                            alt="Gallery 6" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    </div>
                    <div>
                        <img src="/assets/images/25119419.webp"
                            alt="Gallery 7" class="rounded-lg shadow-lg w-full h-64 object-cover">
                    </div>
                    <div>
                        <img src="/assets/images/25119418.webp"
                            alt="Gallery 8" class="rounded-lg shadow-lg w-full h-64 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
