@props([
    'bg' => '/assets/images/hero-bg.webp',
    'badge' => 'The Miami Icon',
    'title' => 'Get to Know',
    'subtitle' => 'Experience the intersection of high-art and coastal luxury.',
])

<section
    {{ $attributes->merge(['class' => 'relative min-h-screen w-full flex items-end justify-center overflow-hidden bg-black']) }}>
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" alt="{{ $title }} hero background" src="{{ $bg }}" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/10 via-transparent to-black/30"></div>
    </div>

    <div class="relative z-20 container mx-auto px-6 pt-32 md:pt-48 pb-12">

        <div
            class="inline-flex items-start gap-3 px-4 py-1.5 mb-8 rounded-full border border-white/20 bg-white/5 backdrop-blur-md">
            <span class="relative flex h-2 w-2">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#e41445] opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#e41445]"></span>
            </span>
            <span class="font-bold text-[10px] tracking-[0.3em] uppercase text-white">
                {{ $badge }}
            </span>
        </div>

        <h1
            class="font-black text-xl md:text-2xl lg:text-3xl leading-[0.85] text-white italic uppercase tracking-tighter">
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-white/90 to-white/70">
                {{ $title }}
            </span>
        </h1>

        <div class="mt-4 flex flex-col items-start gap-6">
            <p class="max-w-md text-white/60 text-sm tracking-widest uppercase">
                {{ $subtitle }}
            </p>

            <div class="relative mt-4">
                <div
                    class="w-[1px] h-24 bg-gradient-to-b from-[#e41445] via-[#e41445]/50 to-transparent relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full bg-white animate-scroll-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
