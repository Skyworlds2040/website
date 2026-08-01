@extends('layouts.app')

@section('title', 'Reviews | Clevelander South Beach')

@section('content')
    <x-page-hero bg="/assets/images/25117733.webp" title="Guest Reviews"
        subtitle="Join us for curated nights of music and culture." />

    <!-- Reviews Header -->
    <section class="py-16 px-4 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-clevelander-pink font-semibold tracking-widest mb-2 text-sm">CLEVELANDER SOUTH BEACH</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                OUR MIAMI HOTEL'S REVIEWS
            </h2>
            <p class="text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Before you begin the process of booking a stay with us in South Beach, why not take some time to read
                through reviews of our satisfied guests. Once you experience the non-stop excitement and adventure of
                Clevelander South Beach first-hand, we know you'll soon be adding your voice to these rave reviews.
            </p>
        </div>
    </section>

    <!-- Reviews List -->
    <section class="py-8 px-4 bg-gray-50">
        <div class="max-w-5xl mx-auto space-y-8">

            <!-- Review 1 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-clevelander-pink">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">GREAT</h3>
                <div class="flex items-center gap-2 mb-4 text-sm">
                    <div class="flex text-clevelander-pink">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600">Rating: 5 out of 5 stars</span>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    I recently attended the weekly Saturday pool party at the Clevelander on Ocean Drive, and it was an
                    incredible experience. Although the food, beverages, and hookahs were a bit pricier than at some other
                    spots, the atmosphere and vibe more than made up for it. The DJ was fantastic, keeping the energy high
                    with a lively mix and engaging guests with 'Name that Tune' games. The music selection was uplifting and
                    kept everyone in a great mood.
                </p>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    I enjoyed the party so much that I stayed for a while even after it officially ended. Despite not
                    purchasing any additional food or drinks during that time, the staff remained welcoming and hospitable.
                </p>
                <p class="text-sm text-gray-500">
                    Reviewed by Maira G on August 2024
                </p>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-clevelander-pink">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">CLEVELANDER HOTEL</h3>
                <div class="flex items-center gap-2 mb-4 text-sm">
                    <div class="flex text-clevelander-pink">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600">Rating: 5 out of 5 stars</span>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Michelle was so accommodating! Such a pleasant personality and inviting. Thanks. All of the staff was
                    great, they are a vibe! The Clevelander's servers are the most gorgeous women you have ever seen!!! If
                    you are looking to stay at a hotel that is in the middle of the action, close to great places to eat and
                    right across from the beach, look no further than the Clevelander.
                </p>
                <p class="text-sm text-gray-500">
                    Reviewed by Connector06480700604 on August 2024
                </p>
            </div>

            <!-- Review 3 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-clevelander-pink">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">GOOD EXPERIENCE</h3>
                <div class="flex items-center gap-2 mb-4 text-sm">
                    <div class="flex text-clevelander-pink">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600">Rating: 5 out of 5 stars</span>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    A good hotel on the first line of the ocean, suitable for a vacation with friends or couples. Not
                    recommended for families with children. Good and polite hotel staff, I especially want to thank the
                    administrator Michelle, she did everything to make our vacation 10/10!
                </p>
                <p class="text-sm text-gray-500">
                    Reviewed by julija K on June 2024
                </p>
            </div>

            <!-- Review 4 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-clevelander-pink">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">FANTASTIC</h3>
                <div class="flex items-center gap-2 mb-4 text-sm">
                    <div class="flex text-clevelander-pink">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600">Rating: 5 out of 5 stars</span>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Our stay in Miami Beach was excellent. Chris was very hospitable and professional. The hotel was in a
                    great location with direct access to the beach. The restaurants near were decent. I would highly
                    recommend staying at the Clevelander and hopefully you run into Chris.
                </p>
                <p class="text-sm text-gray-500">
                    Reviewed by Shawn M on March 2024
                </p>
            </div>

            <!-- Review 5 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-clevelander-pink">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">AMAZING PLACE!</h3>
                <div class="flex items-center gap-2 mb-4 text-sm">
                    <div class="flex text-clevelander-pink">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600">Rating: 5 out of 5 stars</span>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Amazing hotel with kind and helpful staff! They offered us some drinks when we arrived and we were able
                    to leave our baggages at the front desk while waiting for our flight in the evening! Thank you
                    Micheleee!
                </p>
                <p class="text-sm text-gray-500">
                    Reviewed by tbbr1 on October 2023
                </p>
            </div>

        </div>
    </section>
@endsection
