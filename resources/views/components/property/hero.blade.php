<section class="relative min-h-screen w-full flex items-center justify-center overflow-hidden bg-black">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover opacity-60 animate-slow-zoom"
            alt="Ultra-luxury Miami hotel pool deck at dusk with neon pink accent lighting"
            src="/assets/images/hero-bg.webp" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/80"></div>
    </div>

    <div class="relative z-20 container mx-auto px-6 pt-32 md:pt-48 pb-12 text-center">

        <div
            class="inline-flex items-center gap-3 px-4 py-1.5 mb-8 rounded-full border border-white/20 bg-white/5 backdrop-blur-md">
            <span class="relative flex h-2 w-2">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#e41445] opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#e41445]"></span>
            </span>
            <span class="font-['Space_Grotesk'] font-bold text-[10px] tracking-[0.3em] uppercase text-white">
                The Miami Icon
            </span>
        </div>

        <h1
            class="font-['Space_Grotesk'] font-black text-5xl md:text-[8rem] lg:text-[10rem] leading-[0.85] text-white italic uppercase tracking-tighter">
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-white/90 to-white/70">GET
                TO KNOW</span>
            <span class="block text-shadow-neon text-[#e41445]">NEON EDICT</span>
        </h1>

        <div class="mt-16 flex flex-col items-center gap-6">
            <p class="max-w-md text-white/60 font-['Space_Grotesk'] text-sm tracking-widest uppercase">
                Experience the intersection of high-art and coastal luxury.
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

<style>
    /* Add these to your global CSS or Tailwind config */
    @keyframes slow-zoom {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.1);
        }
    }

    .animate-slow-zoom {
        animation: slow-zoom 20s ease-out forwards;
    }

    @keyframes scroll-line {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(100%);
        }
    }

    .animate-scroll-line {
        animation: scroll-line 2s infinite cubic-bezier(0.4, 0, 0.2, 1);
    }

    .text-shadow-neon {
        text-shadow: 0 0 20px rgba(228, 20, 69, 0.4);
    }
</style>
