@extends('layouts.app')

@section('title', 'Food & Drinks | Clevelander South Beach')

@section('content')
    <x-page-hero bg="/assets/images/25117753.webp" title="Dining and Drinking" subtitle="Drink, Dine, and Savor" />

    <!-- South Beach Restaurants Section -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-start mb-12">
                <div>
                    <p class="text-clevelander-pink font-semibold tracking-widest text-sm mb-2">SOUTH BEACH RESTAURANTS AND
                        BARS</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        DRINK, DINE, AND SAVOR<br>AT CLEVELANDER
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Everyone knows that South Beach is the world's best-kept secret. It's a city in Miami Beach that
                        features Clevelander's best: Beach! Our beautifully designed and decorated restaurants and bars on
                        Ocean Drive serve up quality food, drinks, and live entertainment. This truly is an iconic South
                        Florida destination.
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="/assets/images/24829716.webp" alt="Famous Drink"
                        class="rounded-lg shadow-lg max-[w-24rem] object-cover border-4 border-clevelander-pink">
                </div>
            </div>

            <!-- Food Images Row -->
            <div class="flex justify-center gap-8 mb-16">
                <img src="/assets/images/24829730.webp"
                    alt="Food" class="rounded-lg shadow-md max-w-[32rem] object-cover">
                <img src="/assets/images/26205011.webp"
                    alt="Food" class="rounded-lg shadow-md max-w-[32rem] object-cover">
            </div>
        </div>
    </section>

    <!-- Bites & Delights Menu Section -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">
                BITES & DELIGHTS
            </h2>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Left Menu Categories -->
                <div class="space-y-3">
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        ALL DAY BRUNCH
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        PARTY STARTERS
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        FRESH GREENS & HANDHELDS
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        ENTRÉES
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        FLATBREADS
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        SIDES & HAPPY ENDINGS
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        BEER & WINE
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        SIGNATURE COCKTAILS
                    </button>
                    <button
                        class="block text-left font-semibold text-clevelander-navy hover:text-clevelander-pink transition border-b border-clevelander-pink pb-2 w-full">
                        HOOKAH
                    </button>
                </div>

                <!-- Right Menu Items -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-clevelander-navy mb-4 border-b border-clevelander-pink pb-2">ALL
                            DAY BRUNCH</h3>

                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-1">HANGOVER EGGS</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Two fried eggs served over cut potatoes, bacon,
                                peppers and jalapeños, topped with cheddar cheese, avocado, sour cream, sriracha and
                                ketchup.</p>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-1">SHUCKERS AVOCADO TOAST</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Guacamole with two fried eggs, topped with pico
                                de gallo.</p>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-1">BREAKFAST SANDWICH</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Fried eggs, ham, jack cheese, served on a
                                brioche bun. Served with fries.</p>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-1">CHICKEN & WAFFLES</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Crispy chicken, Belgian waffles, bacon,
                                powdered sugar, maple syrup.</p>
                        </div>
                    </div>

                    <div class="border-t border-gray-300 pt-4">
                        <p class="text-gray-500 text-xs text-center">
                            20% Service Charge. 7% Sales Tax on Food and Beverage and 6% Florida State Tax added to final
                            check.<br>
                            <span class="font-semibold text-clevelander-navy">LIVE FUN. DRINK RESPONSIBLY.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swipe for Something Delicious -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-8">
                SWIPE FOR SOMETHING DELICIOUS
            </h2>

            <div class="flex overflow-x-auto gap-4 scrollbar-hide pb-4 snap-x snap-mandatory">
                <div class="flex-shrink-0 snap-center">
                    <div class="relative w-72 h-72 rounded-lg overflow-hidden">
                        <img src="/assets/images/26205001.webp"
                            alt="Grilled Chicken" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-clevelander-pink text-white text-center py-2 text-sm font-semibold">
                            Grilled Chicken
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 snap-center">
                    <div class="relative w-72 h-72 rounded-lg overflow-hidden">
                        <img src="/assets/images/26201083.webp"
                            alt="Burger" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-clevelander-pink text-white text-center py-2 text-sm font-semibold">
                            SMASH BURGERS
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 snap-center">
                    <div class="relative w-72 h-72 rounded-lg overflow-hidden">
                        <img src="/assets/images/26201088.webp"
                            alt="Pizza" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-clevelander-pink text-white text-center py-2 text-sm font-semibold">
                            FLATBREADS
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 snap-center">
                    <div class="relative w-72 h-72 rounded-lg overflow-hidden">
                        <img src="/assets/images/26201093.webp"
                            alt="Fish & Chips" class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-clevelander-pink text-white text-center py-2 text-sm font-semibold">
                            Fish & Chips
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Daily Specials -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-12">
                DAILY SPECIALS
            </h2>

            <!-- Happy Hour Card -->
            <div class="grid md:grid-cols-2 gap-0 rounded-lg overflow-hidden shadow-xl mb-12">
                <div class="bg-clevelander-pink text-white p-12 flex flex-col justify-center">
                    <h3 class="text-3xl font-bold mb-4">HAPPY HOUR</h3>
                    <p class="text-lg mb-2">MONDAY - FRIDAY | 4PM - 7PM</p>
                    <p class="text-sm opacity-90">Enjoy bites starting at $6 and drinks starting at $5!</p>
                </div>
                <div class="relative h-80 md:h-auto">
                    <img src="/assets/images/25117858.webp"
                        alt="Happy Hour" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Clevelander Beach Club -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">CLEVELANDER BEACH CLUB</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        The pinnacle of the Miami party scene. Clevelander Beach Club features three different bars with an
                        unlimited selection of food and drinks. Indulge in delicious beachside bites while sipping on your
                        favorite cocktail in our adult playground.
                    </p>
                    <button
                        class="border-2 border-clevelander-pink text-clevelander-pink hover:bg-clevelander-pink hover:text-white px-6 py-2 rounded-full font-semibold transition text-sm">
                        LEARN MORE
                    </button>
                </div>
                <div>
                    <img src="/assets/images/25127034.webp"
                        alt="Beach Club" class="rounded-lg shadow-lg w-full h-72 object-cover">
                </div>
            </div>

            <!-- Bacon Bitch -->
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">BACON BITCH</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Yes, bitch, it's time for brunch! The name alone is a little bit hung over. Our classic American
                        brunch is brunch is just what the doctor ordered. Bacon Bitch is the Clevelander way. Fresh, bold,
                        and beautiful. Come for the food, stay for the vibes, and, of course, loads of bacon.
                    </p>
                    <button
                        class="border-2 border-clevelander-pink text-clevelander-pink hover:bg-clevelander-pink hover:text-white px-6 py-2 rounded-full font-semibold transition text-sm">
                        LEARN MORE
                    </button>
                </div>
                <div>
                    <img src="/assets/images/24830809.webp"
                        alt="Bacon Bitch Brunch" class="rounded-lg shadow-lg w-full h-72 object-cover">
                </div>
            </div>
        </div>
    </section>

@endsection
