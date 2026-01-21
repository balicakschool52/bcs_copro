<section id="lecture" class="relative min-h-screen scroll-mt-24 bg-[#2B2B28] overflow-hidden">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20">
        <div class="text-center space-y-4 mb-10 md:mb-16">
            <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">
                Bali Cak Tourism School
            </p>
            <p class="text-2xl lg:text-4xl font-semibold text-white -mt-4 ">
                Greeting With Our Team
            </p>
            <p class="text-gray-400 text-sm lg:text-md leading-relaxed max-w-3xl mx-auto">
                Reflects the role of alumni in continuing the legacy—bringing the values and spirit of campus life into
                every step of their journey
            </p>
        </div>


        @php
            $lecturers = [
                [
                    'name' => 'Cahya Wibawa',
                    'division' => 'Hospitality & Service Excellence',
                    'quote' =>
                        '“Service is not a department, it is a mindset that keeps guests returning and teams inspired.”',
                    'photo' =>
                        'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'name' => 'Putri Maheswari',
                    'division' => 'Food & Beverage Innovation',
                    'quote' =>
                        '“Taste, storytelling, and service choreography create the kind of experience guests never forget.”',
                    'photo' =>
                        'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'name' => 'Dewa Pramana',
                    'division' => 'Cruise & Global Placement',
                    'quote' =>
                        '“We prepare you to navigate cultures, standards, and safety with the confidence of a seasoned crew.”',
                    'photo' =>
                        'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=900&q=80',
                ],
            ];
        @endphp

        <div class="relative space-y-4">
            <div class="overflow-hidden" data-lecturer-viewport>
                <div class="flex gap-6 transition-transform duration-500" data-lecturer-track>
                    @foreach ($lecturers as $lecturer)
                        <div class="min-w-full md:min-w-[calc(50%-12px)] bg-white/5 border border-white/10 rounded-2xl p-6 shadow-xl backdrop-blur-lg  transition duration-300 relative overflow-hidden"
                            data-lecturer-card>
                            <div
                                class="absolute -top-12 -right-12 w-32 h-32 rounded-full bg-linear-to-br from-[#E3B04B]/30 to-orange-500/20 blur-3xl">
                            </div>
                            <div class="flex items-center gap-4 relative z-10">
                                <div class="h-75 w-50 rounded-[20px] overflow-hidden ring-2 ring-[#E3B04B]/50 shrink-0">
                                    <img src="{{ $lecturer['photo'] }}" alt="{{ $lecturer['name'] }}"
                                        class="h-full w-full object-cover">
                                </div>
                                <div class="flex flex-col h-full">
                                    <div>
                                        <p class="text-white font-semibold text-lg">
                                            {{ $lecturer['name'] }}
                                        </p>

                                        <span
                                            class="inline-flex items-center gap-2 px-3 py-1 mt-1 text-[11px] font-semibold rounded-full bg-white/10 text-[#E3B04B] border border-[#E3B04B]/40">
                                            <i data-lucide="badge-check" class="w-3 h-3"></i>
                                            {{ $lecturer['division'] }}
                                        </span>
                                    </div>

                                    <p class="text-gray-300 text-sm leading-relaxed mt-auto pt-4">
                                        {{ $lecturer['quote'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-center gap-3" data-lecturer-dots>
                @foreach ($lecturers as $idx => $lecturer)
                    <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/20 hover:bg-[#E3B04B]/70 transition"
                        aria-label="Go to slide {{ $idx + 1 }}" data-lecturer-dot="{{ $idx }}"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>
