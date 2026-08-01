@extends('layouts.app')


@section('title', 'Events | Clevelander South Beach')

@section('content')
    <!-- Hero Section -->
    <x-page-hero bg="/assets/images/27295919.webp" title="South Beach See It All"
        subtitle="Catch a glimpse of Clevelander South Beach" />

    <!-- South Beach Events Section -->
    <section class="py-20 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-clevelander-pink font-semibold tracking-widest mb-4">
                SOUTH BEACH EVENTS
            </p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                EXCITEMENT CHANGES WEEK BY WEEK
            </h2>
            <p class="text-gray-600 leading-relaxed">
                Clevelander South Beach is the place where the parties never stop.
                Step into our Playground and experience Miami Beach's most iconic
                clubs, featuring top DJs getting the party started and sexy go-go
                dancers setting the vibe. Sit poolside at our premier location for the
                best Miami experience, where our infamous parties call your name all
                day and all night. As a guest of our hotel, you have an all-access
                pass to all of Clevelander South Beach's incredible venues.
            </p>
        </div>
    </section>

    <!-- Pool Party Section -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                        POOL PARTY SEASON IS HERE!
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Join the ultimate Pool Party experience at Clevelander Beach Club,
                        the hotspot for unforgettable fun in South Beach. Don't miss the
                        best pool parties on South Beach every Friday, Saturday, and
                        Sunday 12pm - 7pm. Dive into vibrant music, refreshing drinks, and
                        an electric atmosphere that keeps the energy high all weekend
                        long. Make your way to Clevelander Beach Club and be part of South
                        Beach's most exciting Pool Party scene!
                    </p>
                </div>
                <div class="relative">
                    <img src="/assets/images/25226419.webp" alt="Pool Party" class="rounded-lg shadow-xl w-full" />
                </div>
            </div>
        </div>
    </section>

    <!-- Event Grid & filter -->
    @include('components.events')

    <!-- Packages Grid -->
    @include('components.packages')

    @include('components.above-footer')
@endsection
