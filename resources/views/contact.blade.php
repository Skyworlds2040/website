@extends('layouts.app')

@section('title', 'Contact Us | Clevelander South Beach')

@section('content')
    <x-page-hero bg="/assets/images/25117818.webp" title="Questions? Let’s Talk!"
        subtitle="Get in touch through the details below" />

    <section class="py-16 px-4 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-clevelander-pink font-semibold tracking-widest mb-2 text-sm">CLEVELANDER SOUTH BEACH</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Contact Us in Miami
            </h2>
            <p class="text-gray-600 leading-relaxed max-w-5xl mx-auto">
                Clevelander South Beach is much more than just a place to stay—we offer everything you need to experience
                the best of Miami. From a prime spot on Ocean Drive across from the beach to the buzzy POOL+PATIO, the
                chilled out SPF4 Sun Deck, and the stunning C-LEVEL Rooftop Terrace, we’ve got something for everyone. Want
                to learn more? Don’t hesitate to get in touch through the form below.
            </p>
        </div>
    </section>
    <!-- Contact Form Section -->
    <section class="site_width mx-auto pt-8 pb-16 px-4 bg-white">
        <!-- Contact Information -->
        <div class="bg-gray-50 p-8 rounded-lg shadow-lg text-center">
            <h4 class="text-2xl font-bold text-gray-800 mb-6">GET IN TOUCH</h4>

            <div class="space-y-6 flex flex-col items-center">
                <div class="flex items-center gap-4">
                    <div>
                        <h5 class="font-semibold text-gray-800 mb-1">Address</h5>
                        <p class="text-gray-600">1020 Ocean Dr.<br>Miami Beach, FL 33139</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div>
                        <h5 class="font-semibold text-gray-800 mb-1">Phone</h5>
                        <p class="text-gray-600">305.674.1000</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div>
                        <h5 class="font-semibold text-gray-800 mb-1">Email</h5>
                        <p class="text-gray-600">info@clevelander.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-96 bg-gray-200">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.1234567890123!2d-80.1300!3d25.7825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b694b5c5c5c5%3A0x5c5c5c5c5c5c5c5c!2s1020%20Ocean%20Dr%2C%20Miami%20Beach%2C%20FL%2033139!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
@endsection
