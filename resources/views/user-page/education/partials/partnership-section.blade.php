    <section id="partnership" class="relative min-h-screen scroll-mt-24 bg-[#2B2B28] overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -left-20 top-70 w-72 h-72 bg-[#E3B04B]/10 rounded-full blur-3xl"></div>
            <div class="absolute right-0 bottom-0 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20 relative">
            <div class="text-start space-y-4 mb-10 md:mb-16">
                <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">
                    Partnership Network
                </p>
                <p class="text-2xl lg:text-4xl font-semibold text-white -mt-4 ">
                    Collaborating With Industry Leaders
                </p>
                <p class="text-gray-300 text-sm lg:text-md leading-relaxed max-w-3xl">
                    Global hospitality groups, cruise lines, and travel brands that welcome our students for internships,
                    apprenticeships, and direct recruitment.
                </p>
            </div>

            @php
                $partners = [
                    [
                        'name' => 'Hilton Bali Resort',
                        'sector' => 'Luxury Hospitality',
                        'copy' => 'Front office and guest relations internship stream with on-property mentors.',
                        'abbr' => 'HBR',
                        'accent' => 'from-blue-500 to-indigo-500',
                    ],
                    [
                        'name' => 'Marriott International',
                        'sector' => 'Global Hotel Network',
                        'copy' => 'Management trainee track across Bali, Jakarta, and Singapore properties.',
                        'abbr' => 'MI',
                        'accent' => 'from-amber-500 to-orange-600',
                    ],
                    [
                        'name' => 'Norwegian Cruise Line',
                        'sector' => 'Cruise Career',
                        'copy' => 'On-board service and safety readiness for international routes.',
                        'abbr' => 'NCL',
                        'accent' => 'from-teal-500 to-cyan-500',
                    ],
                    [
                        'name' => 'Traveloka',
                        'sector' => 'Travel Tech',
                        'copy' => 'Customer experience and operations immersion in a leading travel platform.',
                        'abbr' => 'TVK',
                        'accent' => 'from-purple-500 to-violet-600',
                    ],
                    [
                        'name' => 'Club Med',
                        'sector' => 'Resort & Leisure',
                        'copy' => 'F&B and recreation rotations with multilingual service standards.',
                        'abbr' => 'CM',
                        'accent' => 'from-emerald-500 to-lime-500',
                    ],
                    [
                        'name' => 'Qatar Airways',
                        'sector' => 'Aviation & Cabin Crew',
                        'copy' => 'Interview prep and grooming pipeline for global cabin crew placements.',
                        'abbr' => 'QA',
                        'accent' => 'from-rose-500 to-red-500',
                    ],
                ];

                $partnerStats = [
                    ['label' => 'Active Partners', 'value' => '35+', 'accent' => 'bg-[#E3B04B]/20 text-[#E3B04B]'],
                    ['label' => 'Annual Placements', 'value' => '200+', 'accent' => 'bg-blue-500/20 text-blue-200'],
                    ['label' => 'Countries', 'value' => '12', 'accent' => 'bg-emerald-500/20 text-emerald-200'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                @foreach ($partnerStats as $stat)
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5 shadow-lg backdrop-blur-lg">
                        <p class="text-3xl font-semibold text-white">{{ $stat['value'] }}</p>
                        <p class="text-sm text-gray-300 mt-1">{{ $stat['label'] }}</p>
                        <span class="inline-flex mt-3 px-3 py-1 rounded-full text-xs font-semibold {{ $stat['accent'] }}">
                            Verified Data
                        </span>
                    </div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($partners as $partner)
                    <div
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 shadow-lg backdrop-blur-lg hover:-translate-y-1 hover:shadow-2xl transition duration-300 flex flex-col gap-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="h-12 w-12 rounded-2xl text-white font-semibold grid place-items-center bg-linear-to-br {{ $partner['accent'] }}">
                                {{ $partner['abbr'] }}
                            </div>
                            <div>
                                <p class="text-white font-semibold">{{ $partner['name'] }}</p>
                                <p class="text-xs text-gray-300 mt-1">{{ $partner['sector'] }}</p>
                            </div>
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            {{ $partner['copy'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div
                class="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 md:p-8 shadow-xl backdrop-blur-lg flex flex-col md:flex-row items-center justify-between gap-4">
                <div>
                    <p class="text-white text-xl font-semibold">Partner with Bali Cak Tourism School</p>
                    <p class="text-gray-300 text-sm mt-1">Build tailored internship, apprenticeship, or hiring programs
                        with our career team.</p>
                </div>
                <div class="flex gap-3">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#E3B04B] text-white font-semibold hover:bg-yellow-400 transition">
                        <i data-lucide="handshake" class="w-4 h-4"></i>
                        Schedule a Call
                    </a>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-5 py-3 rounded-full border border-white/30 text-white font-semibold hover:border-white/60 transition">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        Request Info
                    </a>
                </div>
            </div>
        </div>
    </section>
