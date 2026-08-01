@php
    $eventsArray = [
        [
            'title' => 'RockStar Karoke',
            'subtitle' => 'TUESDAYS | 8 PM',
            'description' =>
                "Warm up your vocal cords and get ready to sing the night away! If you've never tried karaoke before, what better way than at Clevelander? Remember to order a drink or two for some of that liquid courage! Join us every Tuesday night for Rock Star Karaoke with a $150 bottle special on Bacardi Superior, Moet & Chandon, Smirnoff Vodka, and Jose Cuervo Tequila!",
            'image' => '/assets/images/25120011.webp',
            'categories' => ['weekly'], // Matches the data-filter values
            'theme_color' => 'text-primary',
            'hover_color' => 'group-hover:text-primary',
            'button_style' => 'link',
            'border_color' => 'border-primary',
            'button_text' => 'Tickets',
        ],
        [
            'title' => 'BaeWatch Pool Party',
            'subtitle' => 'FRIDAYS | 12 PM',
            'description' =>
                "You can't come to Miami Beach and not get a little sandy! Be on the lookout for our Clevelander babes who are ready to serve up the best drinks and vibes on Ocean Drive! From 12 p.m. to 2 p.m., enjoy $150 bottles of Bacardi Superior, Moet & Chandon, Smirnoff Vodka, and Jose Cuervo Tequila!",
            'image' => '/assets/images/25122384.webp',
            'categories' => ['weekly', 'pool'],
            'theme_color' => 'text-secondary',
            'hover_color' => 'group-hover:text-secondary',
            'button_style' => 'link',
            'border_color' => 'border-secondary',
            'button_text' => 'Tickets',
        ],
        [
            'title' => 'PLAY Pool Party',
            'subtitle' => 'SATURDAYS | 12 PM',
            'description' =>
                "Are you ready to Play? Experience the energy of South Florida like never before at Clevelander with live entertainment including South Florida's top DJs, dancers, and more! Whether you're battling at a game of beer pong or looking to cool down from the hot Miami sun and take a dip in our pool, we have something for everyone. At Clevelander, the party never ends.",
            'image' => '/assets/images/25123957.webp',
            'categories' => ['weekly', 'pool'],
            'theme_color' => 'text-secondary',
            'hover_color' => 'group-hover:text-secondary',
            'button_style' => 'link',
            'border_color' => 'border-secondary',
            'button_text' => 'Tickets',
        ],
        [
            'title' => 'Sexy Sundaze Pool Party',
            'subtitle' => 'SUNDAYS | 12 PM',
            'description' =>
                "Join us for a sizzling Sexy Sundaze Pool Party! Dive into a day of both fun and relaxation as we soak up the sun, sip on refreshing cocktails and dance to the hottest beats by our live DJ. It's the ultimate Sunday escape! Don't miss out on the most seductive pool party of the season.",
            'image' => '/assets/images/28472328.webp',
            'categories' => ['weekly', 'pool'],
            'theme_color' => 'text-primary-container',
            'hover_color' => 'group-hover:text-primary-container',
            'button_style' => 'neon',
            'button_text' => 'Tickets',
        ],
        [
            'title' => 'Vice Nights Party',
            'subtitle' => 'FRIDAY & SATURDAY NIGHTS | 9PM',
            'description' =>
                'Dive into the rhythm of the night with our electrifying Vice Nights party! Get ready to move to the hottest beats and unleash your inner dance floor star. Join us for a night of non-stop energy, good vibes, and unforgettable moments. Grab your favorite cocktails and dance to Hip-Hop and Reggaeton all night.',
            'image' => '/assets/images/25122410.webp',
            'categories' => ['weekly'],
            'theme_color' => 'text-on-surface',
            'hover_color' => 'group-hover:text-primary',
            'button_style' => 'solid',
            'button_text' => 'RSVP Now',
        ],
        [
            'title' => 'Dirty Matriarch Pride Pool Party',
            'subtitle' => 'Saturday 4/11 | 12 PM',
            'description' =>
                'MIAMI, ARE YOU READY?! 🌴🔥 The hottest Lesbian Pool Party for Pride Weekend is taking over April 11 | 12PM–6PM — and we’re bringing the heat. Hosted by Magan and Dayna from Netflix’s Ultimatum: Queer Love, with sounds by Cristy Lawrence, DJ P Nasty, and DJ Nela, this is the Pride pool moment you do NOT want to miss. All energy. All women. All vibes. Powered by Dirty Matriarch — because Pride deserves a party that goes ALL the way up. 🏳️‍🌈⬆️ Pull up. Show out. Celebrate loud',
            'image' => '/assets/images/29142487.webp',
            'categories' => ['pool', 'special'],
            'theme_color' => 'text-on-surface',
            'hover_color' => 'group-hover:text-primary',
            'button_style' => 'solid',
            'button_text' => 'RSVP Now',
        ],
    ];
@endphp

<section class="bg-surface-container-low py-12 px-8">
    <div class="site_width mx-auto flex flex-col md:flex-row justify-between items-end gap-8">
        <div>
            <h2 class="font-headline font-black text-4xl uppercase tracking-tighter mb-2">Curated Lineup</h2>
            <p class="text-on-surface-variant font-medium">Filter by vibe to find your next obsession.</p>
        </div>
        <div class="flex flex-wrap gap-2" id="event-filters">
            <button data-filter="weekly"
                class="filter-btn px-6 py-3 bg-primary text-white font-headline font-bold uppercase text-xs tracking-widest rounded-sm transition-colors">
                Weekly Events
            </button>
            <button data-filter="pool"
                class="filter-btn px-6 py-3 bg-surface-container-high text-on-surface-variant font-headline font-bold uppercase text-xs tracking-widest rounded-sm hover:bg-outline-variant/30 transition-colors">
                Pool Parties
            </button>
            <button data-filter="special"
                class="filter-btn px-6 py-3 bg-surface-container-high text-on-surface-variant font-headline font-bold uppercase text-xs tracking-widest rounded-sm hover:bg-outline-variant/30 transition-colors">
                Special Events
            </button>
        </div>
    </div>
</section>

<section class="py-24 px-8 bg-surface">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20" id="event-grid">

            @forelse($eventsArray as $event)
                <div class="event-card group cursor-pointer transition-opacity duration-300"
                    data-categories="{{ implode(' ', $event['categories'] ?? []) }}">
                    <div class="relative overflow-hidden aspect-[16/14] mb-6">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="{{ $event['alt'] ?? $event['title'] }}" src="{{ $event['image'] }}" />
                    </div>
                    <div>
                        <span
                            class="{{ $event['theme_color'] ?? 'text-primary' }} font-headline font-bold text-sm uppercase tracking-widest mb-2 block">
                            {{ $event['subtitle'] }}
                        </span>

                        <h3
                            class="font-headline font-black text-2xl uppercase tracking-tighter mb-4 {{ $event['hover_color'] ?? 'group-hover:text-primary' }} transition-colors">
                            {{ $event['title'] }}
                        </h3>

                        <p class="text-on-surface-variant mb-6 leading-relaxed">
                            {{ $event['description'] }}
                        </p>

                        @if (($event['button_style'] ?? 'link') === 'link')
                            <button
                                class="flex items-center gap-2 font-headline font-bold uppercase text-sm tracking-[0.2em] border-b-2 {{ $event['border_color'] ?? 'border-primary' }} pb-1 group-hover:gap-4 transition-all">
                                {{ $event['button_text'] ?? 'Tickets' }} <span
                                    class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        @elseif($event['button_style'] === 'neon')
                            <button
                                class="neon-gradient text-white px-8 py-3 rounded-full font-headline font-bold uppercase text-xs tracking-widest">
                                {{ $event['button_text'] ?? 'Tickets' }}
                            </button>
                        @elseif($event['button_style'] === 'solid')
                            <button
                                class="bg-surface-container-highest text-on-surface px-8 py-3 rounded-full font-headline font-bold uppercase text-xs tracking-widest hover:bg-inverse-surface hover:text-white transition-all">
                                {{ $event['button_text'] ?? 'RSVP Now' }}
                            </button>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-on-surface-variant py-12">
                    <p>No events currently available.</p>
                </div>
            @endforelse

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const eventCards = document.querySelectorAll('.event-card');

        const activeClasses = ['bg-primary', 'text-white'];
        const inactiveClasses = ['bg-surface-container-high', 'text-on-surface-variant',
            'hover:bg-outline-variant/30'
        ];

        function applyFilter(filterValue) {
            eventCards.forEach(card => {
                const cardCategories = card.getAttribute('data-categories').split(' ');

                if (cardCategories.includes(filterValue)) {
                    card.style.display = 'block';
                    setTimeout(() => card.style.opacity = '1', 10);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => card.style.display = 'none', 300);
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filterValue = btn.getAttribute('data-filter');

                // Update Button Styles
                filterBtns.forEach(b => {
                    b.classList.remove(...activeClasses);
                    b.classList.add(...inactiveClasses);
                });
                btn.classList.remove(...inactiveClasses);
                btn.classList.add(...activeClasses);

                applyFilter(filterValue);
            });
        });

        // Default to 'weekly' on load
        applyFilter('weekly');
    });
</script>
