@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <section class="bg-[#2B2B28] w-full min-h-screen flex items-center scroll-mt-24">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 pt-20 pb-16 md:pt-14">
            <div class="grid md:grid-cols-2 gap-10 lg:gap-12 items-center">
                <div class="space-y-6 text-center md:text-left">
                    <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">Bali Cak Tourism School
                    </p>
                    <h1 class="text-4xl md:text-5xl font-semibold text-white leading-tight">
                        Quality Assurance For a Bright Future
                    </h1>
                    <p class="text-white text-lg leading-relaxed">
                        Committed to excellence, we ensure quality today to build a brighter and more sustainable future.
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4">
                        <a href="#masuk"
                            class="inline-flex items-center gap-2 bg-[#E3B04B] text-white px-5 py-3 rounded-full shadow-lg shadow-gray-900 hover:bg-yellow-400 transition">
                            Register Now
                        </a>
                        <a href="#prestasi" class="inline-flex items-center gap-2 text-white font-semibold hover:underline">
                            About Us
                            <i data-lucide="arrow-right" class="w-4 h-4 text-white"></i>
                        </a>
                    </div>
                </div>

                @php
                    $registrationSlides = [
                        [
                            'label' => 'Bootcamp Perhotelan',
                            'badge' => 'Offline',
                            'schedule' => '12 - 16 February 2025 · Denpasar Campus',
                            'points' => [
                                '5-day intensive with hands-on front-office & housekeeping practice.',
                                'Competency certificate & access to partner hotel network.',
                                'Guest service simulations using five-star standards.',
                            ],
                            'coach' => 'Certified instructor',
                            'coachNotes' => 'Coach with 10+ years of experience.',
                            'cta' => 'Save Your Seat',
                        ],
                        [
                            'label' => 'Hybrid Hospitality Sprint',
                            'badge' => 'Hybrid',
                            'schedule' => '24 - 28 March 2025 · Denpasar & Live Online',
                            'points' => [
                                'On-site morning classes, evening sessions via live mentoring.',
                                'Practice digital guest experience & hotel CRM.',
                                'Career support: CV review & interview simulations.',
                            ],
                            'coach' => 'Industry mentor',
                            'coachNotes' => 'Ops lead of an Asia Pacific hotel chain.',
                            'cta' => 'Book a Slot',
                        ],
                        [
                            'label' => 'Hospitality Career Starter',
                            'badge' => 'Online',
                            'schedule' => '15 April 2025 · Interactive class',
                            'points' => [
                                'Workshop on service excellence & complaint handling.',
                                'Front-office SOP templates + housekeeping checklist.',
                                'Live 1:1 coaching for internship placement.',
                            ],
                            'coach' => 'Career coach',
                            'coachNotes' => 'Community access & partner job board.',
                            'cta' => 'Apply Now',
                        ],
                    ];
                @endphp
                <div class="relative max-w-xl mx-auto md:mx-0" data-slider="registration" data-per-view="1">
                    <div
                        class="absolute inset-0 -left-2 -top-2 sm:-left-6 sm:-top-6 rounded-3xl bg-gray-800 blur-3xl opacity-70">
                    </div>
                    <div class="relative bg-white shadow-xl border border-blue-100 rounded-3xl p-4 sm:p-6 overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500" data-slider-track>
                                @foreach ($registrationSlides as $slide)
                                    <div class="space-y-4" data-slide>
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-sm text-gray-500">Registration Info</p>
                                                <p class="text-xl font-semibold text-gray-900">{{ $slide['label'] }}</p>
                                            </div>
                                            <span
                                                class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1 rounded-full">{{ $slide['badge'] }}</span>
                                        </div>
                                        <ul class="space-y-3 text-sm text-gray-700">
                                            <li class="flex items-center gap-2">
                                                <span class="h-2 w-2 rounded-full bg-blue-500"></span>
                                                {{ $slide['schedule'] }}
                                            </li>
                                            @foreach ($slide['points'] as $point)
                                                <li class="flex items-center gap-2">
                                                    <span class="h-2 w-2 rounded-full bg-blue-500"></span>
                                                    {{ $point }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="h-11 w-11 rounded-2xl bg-blue-600 text-white grid place-items-center font-semibold">
                                                BC
                                            </div>
                                            <div>
                                                <p class="text-gray-900 font-semibold">{{ $slide['coach'] }}</p>
                                                <p class="text-sm text-gray-500">{{ $slide['coachNotes'] }}</p>
                                            </div>
                                        </div>
                                        <button
                                            class="w-full inline-flex items-center justify-center gap-2 bg-gray-900 text-white px-4 py-3 rounded-2xl hover:bg-gray-800 transition">
                                            {{ $slide['cta'] }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="flex gap-2 justify-center" data-dots>
                                @foreach ($registrationSlides as $index => $slide)
                                    <button type="button" data-dot="{{ $index }}"
                                        class="h-2.5 w-2.5 rounded-full bg-gray-300 transition-transform duration-300"
                                        aria-label="Slide {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                            <div class="flex gap-2">
                                <button type="button" data-prev
                                    class="h-10 w-10 rounded-full border border-blue-100 text-blue-700 grid place-items-center hover:bg-blue-50 transition">
                                    ‹
                                </button>
                                <button type="button" data-next
                                    class="h-10 w-10 rounded-full border border-blue-100 text-blue-700 grid place-items-center hover:bg-blue-50 transition">
                                    ›
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="min-h-screen flex flex-col justify-center scroll-mt-24">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-16 md:py-20">
            <div class="grid md:grid-cols-2 gap-10 lg:gap-12 items-center">
                <div class="space-y-6 text-center md:text-left">
                    <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase text-left">About Us
                    </p>
                    <p class="text-2xl lg:text-4xl font-semibold text-gray-800 leading-tight text-left">
                        Bali Cak Tourism School
                    </p>
                    <p class="text-gray text-sm lg:text-md leading-relaxed text-justify">
                        BALI CAK TOURISM SCHOOL is an educational and training institution dedicated to preparing skilled
                        and professional human resources for the tourism, hospitality, and cruise ship industries.
                    </p>
                    <p class="text-gray text-sm lg:text-md leading-relaxed text-justify">
                        Under the auspices of the Pesraman Cak Bali Foundation, we focus on developing not only technical
                        competencies, but also strong character, discipline, work ethics, and professionalism. Through an
                        industry-oriented curriculum, experienced instructors, and proper training facilities, we equip
                        students with the skills needed to compete in the national and international tourism workforce. </p>
                    <p class="text-gray text-sm lg:text-md leading-relaxed text-justify">
                        Our mission is to empower the younger generation to achieve successful careers and contribute to the
                        sustainable growth of the tourism industry. </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 bg-[#2B2B28] text-white px-5 py-3 rounded-full shadow-lg shadow-gray-900 hover:bg-gray-9  00 transition">
                        Show More
                        <i data-lucide="arrow-right" class="w-4 h-4 text-white"></i>
                    </a>
                </div>
                <div class="space-y-6 text-center">
                    <div class="absolute rounded-l-2xl z-0 w-20 h-70 lg:w-20 lg:h-100 bg-[#E6B24A]"></div>
                    <div class="relative p-6 lg:p-10 z-10">
                        <img src="{{ asset('images/about1.png') }}" alt="about-section" class="h-full w-full ">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-30 bg-[#2B2B28]"></div>

    </section>


    @php
        $achievementSlides = [
            [
                'tag' => 'Competition',
                'title' => '1st Place Barista Challenge 2024',
                'copy' => 'Beverage team showcased signature menus elevating Bali flavors.',
                'badge' => 'F&B',
                'image' => 'images/about1.png',
            ],
            [
                'tag' => 'Internship',
                'title' => 'Placements at five-star hotel network',
                'copy' => '50 students accepted for internships in Bali, Jakarta, and Singapore.',
                'badge' => 'Career',
                'image' => 'images/about2.png',
            ],
            [
                'tag' => 'Event',
                'title' => 'Protocol & Event Management Showcase',
                'copy' => 'Students managed an international event with 500+ attendees.',
                'badge' => 'Event',
                'image' => 'images/about3.png',
            ],
            [
                'tag' => 'Scholarship',
                'title' => 'Merit Scholarship Cohort 2025',
                'copy' => '25 students awarded tuition support after portfolio & interview review.',
                'badge' => 'Support',
                'image' => 'images/about4.png',
            ],
        ];
    @endphp

    <section id="prestasi" class="min-h-screen flex flex-col justify-center scroll-mt-24">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-16 md:py-20">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 text-center md:text-left">
                <div>
                    <p class="text-xs font-semibold tracking-[0.25em] text-[#E3B04B] uppercase">Becoming a Part of a Greater
                        Journey</p>
                    <h2 class="text-3xl font-semibold text-gray-900">Bali Cak Tourism School</h2>
                    <p class="text-xs font-semibold text-gray uppercase max-w-3xl mx-auto md:mx-0">Reflects the role of alumni
                        in continuing the legacy—bringing the values and spirit of campus life into every step of their journey
                    </p>
                </div>
            </div>

            <div class="relative" data-slider="achievements" data-per-view="3">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 gap-6" data-slider-track>
                        @foreach ($achievementSlides as $slide)
                            <article class="flex justify-center" data-slide>
                                <div class="relative w-full max-w-[320px] sm:max-w-[360px] rounded-2xl overflow-hidden bg-white shadow-lg">
                                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['tag'] }}"
                                        class="w-full h-[420px] object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                                    <div class="absolute bottom-0 p-5 text-white space-y-2">
                                        <span class="text-sm text-gray-300">
                                            {{ $slide['tag'] }}
                                        </span>
                                        <h3 class="text-lg font-semibold leading-snug">
                                            {{ $slide['title'] }}
                                        </h3>
                                        <p class="text-sm text-gray-200 leading-relaxed line-clamp-3">
                                            {{ $slide['copy'] }}
                                        </p>
                                        <span
                                            class="inline-block mt-2 px-3 py-1 text-xs font-medium rounded-full bg-blue-600 text-white">
                                            {{ $slide['badge'] }}
                                        </span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex gap-2 justify-center" data-dots>
                        @foreach ($achievementSlides as $index => $slide)
                            <button type="button" data-dot="{{ $index }}"
                                class="h-2.5 w-2.5 rounded-full bg-gray-300 transition-transform duration-300"
                                aria-label="Achievement Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="flex gap-2 justify-center">
                        <button type="button" data-prev
                            class="h-10 w-10 rounded-full border border-blue-100 text-blue-700 grid place-items-center hover:bg-blue-50 transition">
                            ‹
                        </button>
                        <button type="button" data-next
                            class="h-10 w-10 rounded-full border border-blue-100 text-blue-700 grid place-items-center hover:bg-blue-50 transition">
                            ›
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="masuk" class="bg-gray-900 text-white min-h-screen flex items-center scroll-mt-24">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-16 md:py-20 grid md:grid-cols-2 gap-10 items-center">
            <div class="space-y-4 text-center md:text-left">
                <p class="text-xs font-semibold tracking-[0.25em] text-blue-200 uppercase">Start now</p>
                <h2 class="text-3xl font-semibold">Plan your learning with us</h2>
                <p class="text-gray-300">Our admission team is ready to help you choose a program that fits your goals.</p>
                <div class="flex items-center gap-3 text-sm text-blue-200 justify-center md:justify-start">
                    <span class="h-10 w-10 rounded-full bg-white/10 grid place-items-center">24/7</span>
                    <span>Personal guidance and the latest scholarship info.</span>
                </div>
            </div>

            <form class="bg-white text-gray-900 rounded-2xl p-6 shadow-xl space-y-4">
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Full Name</label>
                    <input id="name" type="text" placeholder="Your name"
                        class="w-full rounded-xl border border-gray-200 px-3 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input id="email" type="email" placeholder="email@domain.com"
                        class="w-full rounded-xl border border-gray-200 px-3 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="program" class="block text-sm font-semibold text-gray-700 mb-1">Program Interest</label>
                    <select id="program"
                        class="w-full rounded-xl border border-gray-200 px-3 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <option>Hospitality</option>
                        <option>Food & Beverage</option>
                        <option>Tour & Travel</option>
                        <option>Event Management</option>
                    </select>
                </div>
                <button type="button"
                    class="w-full bg-blue-700 text-white font-semibold px-4 py-3 rounded-xl hover:bg-blue-800 transition">
                    Send Message
                </button>
                <p class="text-xs text-gray-500">We will contact you within 24 hours.</p>
            </form>
        </div>
    </section> --}}
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const initSlider = (slider) => {
                const track = slider.querySelector('[data-slider-track]');
                const slides = Array.from(slider.querySelectorAll('[data-slide]'));
                const dotsContainer = slider.querySelector('[data-dots]');
                const dots = Array.from(dotsContainer?.querySelectorAll('button') || []);
                const prev = slider.querySelector('[data-prev]');
                const next = slider.querySelector('[data-next]');
                let index = 0;
                let timer;
                let perView = 1;
                let maxIndex = 0;

                if (!track || !slides.length) return;

                const getResponsivePerView = () => {
                    if (window.innerWidth >= 1024) return 3;
                    if (window.innerWidth >= 768) return 2;
                    return 1;
                };

                const syncLayout = () => {
                    const desired = Number(slider.dataset.perView) || slides.length;
                    perView = Math.min(desired, getResponsivePerView(), slides.length);
                    maxIndex = Math.max(0, slides.length - perView);
                    const width = 100 / perView;
                    slides.forEach((slide) => {
                        slide.style.width = `${width}%`;
                        slide.style.flex = `0 0 ${width}%`;
                    });
                    track.style.width = `${(slides.length / perView) * 100}%`;
                    // Hide extra dots if fewer pages
                    const pages = maxIndex + 1;
                    dots.forEach((dot, idx) => {
                        dot.classList.toggle('hidden', idx >= pages);
                    });
                    if (index > maxIndex) index = maxIndex;
                    setActive(index, false);
                };

                const setActive = (targetIndex, restart = true) => {
                    index = Math.min(Math.max(0, targetIndex), maxIndex);
                    track.style.transform = `translateX(-${(index * 100) / perView}%)`;

                    dots.forEach((dot, idx) => {
                        const active = idx === index;
                        dot.classList.toggle('bg-blue-600', active);
                        dot.classList.toggle('bg-gray-300', !active);
                        dot.classList.toggle('scale-125', active);
                    });

                    if (restart) startAutoSlide();
                };

                const startAutoSlide = () => {
                    clearInterval(timer);
                    if (maxIndex === 0) return;
                    timer = setInterval(() => {
                        const nextIndex = index + 1 > maxIndex ? 0 : index + 1;
                        setActive(nextIndex, false);
                    }, 6000);
                };

                prev?.addEventListener('click', () => {
                    const target = index - 1 < 0 ? maxIndex : index - 1;
                    setActive(target);
                });

                next?.addEventListener('click', () => {
                    const target = index + 1 > maxIndex ? 0 : index + 1;
                    setActive(target);
                });

                dotsContainer?.addEventListener('click', (event) => {
                    const dot = event.target.closest('button[data-dot]');
                    if (!dot || dot.classList.contains('hidden')) return;
                    setActive(Number(dot.dataset.dot));
                });

                slider.addEventListener('mouseenter', () => clearInterval(timer));
                slider.addEventListener('mouseleave', startAutoSlide);
                window.addEventListener('resize', () => {
                    syncLayout();
                });

                syncLayout();
                startAutoSlide();
            };

            document.querySelectorAll('[data-slider]').forEach((slider) => initSlider(slider));
        });
    </script>
@endpush
