<form id="vendor-application-form" method="POST" action="{{ route("vendor.application.store") }}" class="space-y-12">@csrf
    <!-- Section: Personal Information -->
    <section class="p-8 bg-surface-container-low rounded-xl">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" data-icon="person_edit">person_edit</span>
            </div>
            <h2 class="text-2xl font-bold tracking-tight">Personal Information</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-2">
                <label for="full_name" class="block text-sm font-semibold text-on-surface-variant ml-1">
                    First &amp; Last Name
                </label>
                <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}"
                    class="w-full bg-surface-container-lowest border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container transition-all @error('full_name') ring-2 ring-red-500 @enderror"
                    placeholder="Auge Doe" />
                @error('full_name')
                    <p class="text-xs text-red-500 mt-1 ml-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="facebook_username" class="block text-sm font-semibold text-on-surface-variant ml-1">
                    Phone Number
                </label>
                <input type="text" name="facebook_username" id="facebook_username"
                    value="{{ old('facebook_username') }}"
                    class="w-full bg-surface-container-lowest border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container transition-all @error('facebook_username') ring-2 ring-red-500 @enderror"
                    placeholder="(###) ###-####" />
                @error('facebook_username')
                    <p class="text-xs text-red-500 mt-1 ml-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2 md:col-span-2">
                <label for="business_name" class="block text-sm font-semibold text-on-surface-variant ml-1">
                    Your Business Name
                </label>
                <input type="text" name="business_name" id="business_name" value="{{ old('business_name') }}"
                    class="w-full bg-surface-container-lowest border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container transition-all @error('business_name') ring-2 ring-red-500 @enderror"
                    placeholder="Curated Collective Co." />
                @error('business_name')
                    <p class="text-xs text-red-500 mt-1 ml-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2 md:col-span-2">
                <label for="email" class="block text-sm font-semibold text-on-surface-variant ml-1">
                    Email Address
                </label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="w-full bg-surface-container-lowest border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container transition-all @error('email') ring-2 ring-red-500 @enderror"
                    placeholder="Auge@example.com" />
                @error('email')
                    <p class="text-xs text-red-500 mt-1 ml-1">{{ $message }}</p>
                @else
                    <p class="text-xs text-on-surface-variant italic mt-1 ml-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs" data-icon="info">info</span>
                        Double-check for typos! We send all confirmations here.
                    </p>
                @enderror
            </div>
        </div>
    </section>
    <!-- Section: Event Dates -->
    <section class="p-8 bg-surface-container-low rounded-xl">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
            </div>
            <h2 class="text-2xl font-bold tracking-tight">Event Dates</h2>
        </div>

        @error('event_dates')
            <p class="text-sm text-red-500 mb-4 ml-1">Please select at least one date.</p>
        @enderror

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
            @php
                $dates = [
                    'Aug_07' => 'Aug 07',
                    'Aug_08' => 'Aug 08',
                    'Aug_09' => 'Aug 09',
                    'other' => 'Other',
                ];
            @endphp

            @foreach ($dates as $value => $label)
                <label for="date_{{ $value }}"
                    class="flex items-center gap-3 p-4 bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-primary-container/20 transition-colors group {{ $value === 'other' ? 'border border-dashed border-outline-variant/30' : '' }}">
                    <input type="checkbox" name="event_dates[]" id="date_{{ $value }}"
                        value="{{ $value }}"
                        {{ is_array(old('event_dates')) && in_array($value, old('event_dates')) ? 'checked' : '' }}
                        class="w-5 h-5 rounded text-primary focus:ring-primary" />
                    <span class="text-sm font-medium">{{ $label }}</span>
                </label>
            @endforeach
        </div>
    </section>
    <!-- Bento Layout: Fees & Business Base -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
        <section class="md:col-span-3 p-8 bg-surface-container-low rounded-xl">
            <h3 class="text-xl font-bold tracking-tight mb-6">Fees &amp; Booth Size</h3>

            @error('booth')
                <p class="text-xs text-red-500 mb-3 ml-1">Please select a booth size.</p>
            @enderror

            <div class="space-y-3">
                @php
                    $booths = [
                        '8x10' => ['label' => '8ft x 10ft', 'price' => '$180'],
                        '10x10' => ['label' => '10ft x 10ft', 'price' => '$200'],
                        'corner' => ['label' => 'Corner Booth', 'price' => '$220'],
                        'truck' => ['label' => 'Trucks (Food, etc)', 'price' => '~$280'],
                    ];
                @endphp

                @foreach ($booths as $value => $info)
                    <label for="booth_{{ $value }}"
                        class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-primary/5 transition-all @error('booth') border border-red-200 @enderror">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="booth" id="booth_{{ $value }}"
                                value="{{ $value }}" {{ old('booth') == $value ? 'checked' : '' }}
                                class="w-5 h-5 text-primary focus:ring-primary" />
                            <span class="text-sm font-medium">{{ $info['label'] }}</span>
                        </div>
                        <span class="text-primary font-bold">{{ $info['price'] }}</span>
                    </label>
                @endforeach
            </div>
        </section>

        <section class="md:col-span-2 p-8 bg-surface-container-low rounded-xl">
            <h3 class="text-xl font-bold tracking-tight mb-6">Business Base</h3>

            @error('base')
                <p class="text-xs text-red-500 mb-3 ml-1">Please select your base location.</p>
            @enderror

            <div class="space-y-4">
                <label for="base_mn"
                    class="flex items-center gap-3 p-4 bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-primary/5 transition-all @error('base') border border-red-200 @enderror">
                    <input type="radio" name="base" id="base_mn" value="California"
                        {{ old('base') == 'California' ? 'checked' : '' }}
                        class="w-5 h-5 text-primary focus:ring-primary" />
                    <span class="text-sm font-medium">California</span>
                </label>

                <label for="base_other"
                    class="flex items-center gap-3 p-4 bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-primary/5 transition-all @error('base') border border-red-200 @enderror">
                    <input type="radio" name="base" id="base_other" value="other"
                        {{ old('base') == 'other' ? 'checked' : '' }}
                        class="w-5 h-5 text-primary focus:ring-primary" />
                    <span class="text-sm font-medium">Other</span>
                </label>
            </div>
        </section>
    </div>
    <!-- Section: Primary Category (Long List) -->
    <section class="p-8 bg-surface-container-low rounded-xl">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" data-icon="category">category</span>
            </div>
            <h2 class="text-2xl font-bold tracking-tight">Primary Category</h2>
        </div>

        @error('categories')
            <p class="text-xs text-red-500 mb-4 ml-1">Please select at least one category.</p>
        @enderror

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @php
                $categories = [
                    'boutique_clothing' => 'Boutique Clothing',
                    'fitness_apparel' => 'Fitness Apparel',
                    'crystals_stones' => 'Crystals & Stones',
                    'handmade_jewelry' => 'Handmade Jewelry',
                    'artisan_woodwork' => 'Artisan Woodwork',
                    'beauty_skincare' => 'Beauty & Skincare',
                    'home_Augor' => 'Home Augor',
                    'custom_candles' => 'Custom Candles',
                    'gourmet_food' => 'Gourmet Food',
                    'vintage_goods' => 'Vintage Goods',
                    'eco_friendly' => 'Eco-friendly Products',
                    'pet_accessories' => 'Pet Accessories',
                    'other_unique_finds' => 'Other Unique Finds',
                ];
            @endphp

            @foreach ($categories as $value => $label)
                <label for="cat_{{ $value }}"
                    class="flex items-center gap-3 px-2 py-1 transition-colors hover:text-primary cursor-pointer group">
                    <input type="checkbox" name="categories[]" id="cat_{{ $value }}"
                        value="{{ $value }}"
                        {{ is_array(old('categories')) && in_array($value, old('categories')) ? 'checked' : '' }}
                        class="w-4 h-4 rounded text-primary focus:ring-primary" />
                    <span class="text-sm group-hover:font-medium transition-all">{{ $label }}</span>
                </label>
            @endforeach
        </div>
    </section>
    <!-- Section: Terms & Conditions -->
    <section class="p-8 bg-surface-container-low rounded-xl">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" data-icon="gavel">gavel</span>
            </div>
            <h2 class="text-2xl font-bold tracking-tight">Terms &amp; Conditions</h2>
        </div>
        <div class="space-y-4 mb-8">
            <ul class="space-y-4 text-sm text-on-surface-variant leading-relaxed">
                <li class="flex gap-3">
                    <span class="material-symbols-outlined text-primary text-lg"
                        data-icon="check_circle">check_circle</span>
                    Vendors must arrive 2 hours prior to festival opening for setup.
                </li>
                <li class="flex gap-3">
                    <span class="material-symbols-outlined text-primary text-lg"
                        data-icon="check_circle">check_circle</span>
                    Booth locations are assigned by the curator and are final.
                </li>
                <li class="flex gap-3">
                    <span class="material-symbols-outlined text-primary text-lg"
                        data-icon="check_circle">check_circle</span>
                    Vendors are responsible for their own point-of-sale systems.
                </li>
                <li class="flex gap-3">
                    <span class="material-symbols-outlined text-primary text-lg"
                        data-icon="check_circle">check_circle</span>
                    Insurance for products and personnel is the vendor's responsibility.
                </li>
                <li class="flex gap-3">
                    <span class="material-symbols-outlined text-primary text-lg"
                        data-icon="check_circle">check_circle</span>
                    Trash and debris must be cleared from your area at closing.
                </li>
                <li class="flex gap-3">
                    <span class="material-symbols-outlined text-primary text-lg"
                        data-icon="check_circle">check_circle</span>
                    Cancellations must be made 14 days in advance for a partial refund.
                </li>
            </ul>
        </div>
        <label
            class="flex items-center gap-4 p-6 bg-primary-container/10 border border-primary/20 rounded-xl cursor-pointer hover:bg-primary-container/15 transition-all">
            <input name="terms" id="terms" class="w-6 h-6 rounded text-primary focus:ring-primary" type="checkbox" />
            <span class="text-sm italic">I agree to the terms and conditions listed
                above</span>
        </label>
    </section>
    <!-- Form Actions -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-8">
        <div class="flex gap-4">
            <button
                class="px-10 py-3 bg-primary text-on-primary rounded-xl font-bold shadow-lg shadow-primary/20 hover:scale-105 transition-transform"
                type="submit">
                Submit Application
            </button>
        </div>
    </div>
</form>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('vendor-application-form');
    if (!form) return;

    form.addEventListener('submit', function (event) {
        let errors = [];

        // Simple vanilla JS validation
        const fullName = document.getElementById('full_name').value.trim();
        const businessName = document.getElementById('business_name').value.trim();
        const email = document.getElementById('email').value.trim();
        const termsChecked = document.getElementById('terms').checked;

        if (!fullName) errors.push("First & Last Name is required.");
        if (!businessName) errors.push("Business Name is required.");
        if (!email) errors.push("Email Address is required.");
        if (!termsChecked) errors.push("You must agree to the terms and conditions.");

        // Check radio groups
        const boothSelected = document.querySelector('input[name="booth"]:checked');
        if (!boothSelected) errors.push("Please select a booth size.");

        const baseSelected = document.querySelector('input[name="base"]:checked');
        if (!baseSelected) errors.push("Please select your business base.");

        // Check checkboxes groups
        const datesChecked = document.querySelectorAll('input[name="event_dates[]"]:checked');
        if (datesChecked.length === 0) errors.push("Please select at least one event date.");

        const categoriesChecked = document.querySelectorAll('input[name="categories[]"]:checked');
        if (categoriesChecked.length === 0) errors.push("Please select at least one primary category.");

        if (errors.length > 0) {
            event.preventDefault();
            alert(errors.join("\n"));
        }
    });
});
</script>
