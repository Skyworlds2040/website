@extends('layouts.form')

@section('title', 'Vendor Application - Outside Lands Music & Arts Festival')

@section('content')
    <div class="pt-32 pb-20">
        <div class="max-w-4xl mx-auto px-6">
            <!-- Header Section -->
            <header class="mb-16">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 bg-primary-container text-on-primary-container rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                    <span class="material-symbols-outlined text-sm" data-icon="stars">stars</span>
                    <span>Outside Lands Music & Arts Festival</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tighter text-on-surface mb-4 leading-tight">
                    Outside Lands Music & Arts Festival Aug.7th – Aug.9th <br /><span class="text-primary">Vendor
                        Application</span>
                </h1>
                <p class="text-on-surface-variant leading-relaxed text-lg">
                    Join Us at the Outside Lands Music & Arts Festival Music Festival!
                </p>
                <p class="text-on-surface-variant leading-relaxed mt-4">
                    The Outside Lands Music & Arts Festival Music Festival is set to bring an unforgettable multi-day outdoor celebration to Grant Park, Chicago, Illinois, bringing together music fans from around the world for one of the country's most iconic festival experiences. Attendees will enjoy world-class live performances, incredible food, interactive brand activations, shopping, art installations, and an energetic festival atmosphere.
                </p>
                <p class="text-on-surface-variant leading-relaxed mt-4">
                    We invite food & beverage vendors, merchandise and fan-gear sellers, artisans, winter apparel brands,
                    and specialty retail vendors to showcase their offerings to thousands of attendees throughout the event.
                    With massive foot traffic across multiple days, this is a prime opportunity to connect with a highly
                    engaged audience and grow your brand in one of the Midwest’s most anticipated winter fan festivals.
                </p>
                <p class="text-on-surface-variant leading-relaxed mt-4">
                    Please complete the vendor application form to be considered for participation. Vendor spaces are
                    limited and will be filled on a rolling basis, so early applications are strongly encouraged.
                </p>
                <p class="text-on-surface-variant leading-relaxed mt-4">
                    Apply now to secure your spot — spaces are limited!
                </p>
            </header>
            {{-- form --}}
            @if (session('success'))
                <div class="mb-8 p-4 bg-green-100 border border-green-400 text-green-700 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif
            @include('components.form')
        </div>
    </div>
@endsection