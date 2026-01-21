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
                <div class="relative max-w-xl mx-auto md:mx-0 mt-4">
                    <div
                        class="absolute inset-0 -left-2 -top-2 sm:-left-6 sm:-top-6 rounded-3xl bg-gray-800 blur-3xl opacity-70 pointer-events-none">
                    </div>
                    <div class="relative bg-white shadow-xl border border-blue-100 rounded-3xl p-4 sm:p-6 overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm text-gray-500">Registration Info</p>
                                            <p class="text-xl font-semibold text-gray-900">Bootcamp Perhotelan</p>
                                        </div>
                                        <span
                                            class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Offline</span>
                                    </div>
                                    <ul class="space-y-3 text-sm text-gray-700">
                                        <li class="flex items-center gap-2">
                                            <span class="h-2 w-2 rounded-full bg-blue-500"></span>
                                            12 - 16 February 2025 · Denpasar Campus
                                        </li>
                                    </ul>
                                    <div class="text-justify text-xs text-gray-500">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet officiis, quam
                                        cupiditate dolorem modi reprehenderit temporibus alias nostrum fuga voluptas beatae
                                        numquam distinctio odit? Illum aliquam libero nobis autem nostrum!
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <div
                                            class="h-11 w-11 rounded-2xl bg-blue-600 text-white grid place-items-center font-semibold">
                                            BC
                                        </div>
                                        <div>
                                            <p class="text-gray-900 font-semibold">Cahya Wibawa</p>
                                            <p class="text-sm text-gray-500">Coach with 10+ years of experience.</p>
                                        </div>
                                    </div>
                                    <a href="#"> <button class="bg-blue-600 rounded-xl p-2 w-full text-white">
                                            Registration</button></a>
                                </div>
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
                    <p class="text-2xl lg:text-4xl font-semibold text-gray-800 leading-tight text-left -mt-7">
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
    </section>
    <div class="w-full h-30 bg-[#2B2B28] "></div>
    <section id="education" class="relative min-h-screen scroll-mt-24 bg-[#2B2B28] overflow-hidden -mt-1">
        <!-- Decorative Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Glow kiri -->
            <div class="absolute -left-40 top-70 w-100 h-100 bg-[#E6B24A]/20 rounded-full blur-3xl"></div>

            <!-- Glow kanan -->
            <div class="absolute top-250 md:top-70 -right-32 w-100 h-100 bg-[#E6B24A]/20 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20">
            <!-- Header -->
            <div class="text-center space-y-4 mb-10 md:mb-16">
                <p class="text-2xl lg:text-4xl font-semibold text-white">
                    Bali Cak Tourism School
                </p>
                <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase -mt-4">
                    Education Programs
                </p>
                <p class="text-white text-sm lg:text-md leading-relaxed max-w-3xl mx-auto">
                    Our study programs are designed with a practical approach and grounded in industry needs, ensuring that
                    graduates are fully equipped to compete in the real world.
                </p>
                <div class="flex justify-center mt-6">
                    <span class="w-24 h-0.5 bg-linear-to-r from-transparent via-[#E3B04B] to-transparent"></span>
                </div>
            </div>

            <!-- Konten edukasi nanti di sini -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white p-6 rounded-xl shadow hover:shadow-xl hover:-translate-y-1 transition duration-300 group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-linear-to-br from-[#E3B04B]/8 to-transparent opacity-0 group-hover:opacity-100 transition">
                    </div>
                    <div class="flex items-start justify-between mb-4 relative z-10">
                        <div
                            class="h-12 w-12 rounded-2xl bg-linear-to-br from-[#E3B04B] to-orange-500 grid place-items-center">
                            <i data-lucide="user-pen" class="w-6 h-6 text-white"></i>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-200">
                            <i data-lucide="sparkle" class="w-3 h-3"></i> Basic Level
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 relative z-10">Front Office</h3>
                    <p class="text-sm text-gray-600 leading-relaxed relative z-10">
                        Learn professional hotel operations, guest services, and hospitality standards
                        based on international industry practices.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="h-12 w-12 rounded-2xl bg-linear-to-br from-blue-600 to-indigo-500 grid place-items-center">
                            <i data-lucide="door-open" class="w-6 h-6 text-white"></i>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-200">
                            <i data-lucide="sparkle" class="w-3 h-3"></i> Basic Level
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">House Keeping</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Understand tour planning, ticketing, guiding techniques, and tourism business
                        management for global markets.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="h-12 w-12 rounded-2xl bg-linear-to-br from-teal-500 to-cyan-500 grid place-items-center">
                            <i data-lucide="chef-hat" class="w-6 h-6 text-white"></i>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-200">
                            <i data-lucide="sparkle" class="w-3 h-3"></i> Basic Level
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">F&B Service</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Specialized training for cruise ship careers, including service excellence,
                        safety, and international work standards.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="h-12 w-12 rounded-2xl bg-linear-to-br from-amber-500 to-orange-600 grid place-items-center">
                            <i data-lucide="utensils-crossed" class="w-6 h-6 text-white"></i>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-200">
                            <i data-lucide="sparkle" class="w-3 h-3"></i> Basic Level
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Culinary</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Practical skills in restaurant service, bar handling, food presentation,
                        and customer satisfaction.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="h-12 w-12 rounded-2xl bg-linear-to-br from-emerald-500 to-lime-500 grid place-items-center">
                            <i data-lucide="headset" class="w-6 h-6 text-white"></i>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-semibold px-3 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200">
                            <i data-lucide="badge-check" class="w-3 h-3"></i> Middle Level
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Room Division</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Learn reception duties, reservation systems, communication skills,
                        and guest relations management.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="h-12 w-12 rounded-2xl bg-linear-to-br from-slate-600 to-slate-800 grid place-items-center">
                            <i data-lucide="briefcase" class="w-6 h-6 text-white"></i>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-semibold px-3 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200">
                            <i data-lucide="badge-check" class="w-3 h-3"></i> Middle Level
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">F&B Division</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Real industry experience through internships in hotels, resorts,
                        travel agencies, and cruise companies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="achievement" class="relative min-h-screen scroll-mt-24  overflow-hidden">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20">
            <div class="text-start space-y-4 mb-10 md:mb-16">
                <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">
                    Becoming a Part of a Greater Journey
                </p>
                <p class="text-2xl lg:text-4xl font-semibold text-gray-700 -mt-4">
                    Bali Cak Tourism School
                </p>
                <p class="text-gray-400 text-sm lg:text-md leading-relaxed max-w-3xl italic">
                    Reflects the role of alumni in continuing the legacy—bringing the values and spirit of campus life into
                    every step of their journey
                </p>
            </div>

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
                        'image' => 'images/about1.png',
                    ],
                    [
                        'tag' => 'Event',
                        'title' => 'Protocol & Event Management Showcase',
                        'copy' => 'Students managed an international event with 500+ attendees.',
                        'badge' => 'Event',
                        'image' => 'images/about1.png',
                    ],
                    [
                        'tag' => 'Scholarship',
                        'title' => 'Merit Scholarship Cohort 2025',
                        'copy' => '25 students awarded tuition support after portfolio & interview review.',
                        'badge' => 'Support',
                        'image' => 'images/about1.png',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($achievementSlides as $slide)
                    <article class="flex justify-center" data-slide>
                        <div
                            class="relative w-full max-w-[320px] sm:max-w-90 rounded-2xl overflow-hidden bg-white shadow-lg">
                            <img src="{{ asset($slide['image']) }}" alt="{{ $slide['tag'] }}"
                                class="w-full h-105 object-cover">
                            <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>
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
    </section>
    <section id="lecture" class="relative min-h-screen scroll-mt-24 bg-[#2B2B28] overflow-hidden">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20">
            <div class="text-center space-y-4 mb-10 md:mb-16">
                <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">
                    Bali Cak Tourism School
                </p>
                <p class="text-2xl lg:text-4xl font-semibold text-white -mt-4 ">
                    Greeting With Our Lecturer
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
                                    <div
                                        class="h-75 w-50 rounded-[20px] overflow-hidden ring-2 ring-[#E3B04B]/50 shrink-0">
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
                        <button type="button"
                            class="h-2.5 w-2.5 rounded-full bg-white/20 hover:bg-[#E3B04B]/70 transition"
                            aria-label="Go to slide {{ $idx + 1 }}"
                            data-lecturer-dot="{{ $idx }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="relative min-h-screen scroll-mt-24 overflow-hidden">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20">
            <div class="text-start space-y-4 mb-10 md:mb-16">
                <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">
                    Activity Of
                </p>
                <p class="text-2xl lg:text-4xl font-semibold text-gray-800 -mt-4 ">
                    Bali Cak Tourism School
                </p>
                <p class="text-gray-400 text-sm lg:text-md leading-relaxed max-w-3xl">
                    Capturing moments of learning, creativity, and togetherness where students grow,
                    explore their potential, and prepare themselves for a successful future in tourism
                    and hospitality industries.
                </p>
            </div>

            @php
                $blogs = [
                    [
                        'title' => 'Wisuda ke 4 Tahun Bali Cak Tourism School',
                        'sub_title' => 'Sekitar 300 orang hadir dalam wisuda kali ini Bali Cak School menjadi
                                saksi perjalanan para alumni menuju dunia profesional.',
                        'date' => 'August 30, 2025',
                        'photo' =>
                            'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'title' => 'Wisuda ke 4 Tahun Bali Cak Tourism School',
                        'sub_title' => 'Sekitar 300 orang hadir dalam wisuda kali ini Bali Cak School menjadi
                                saksi perjalanan para alumni menuju dunia profesional.',
                        'date' => 'August 30, 2025',
                        'photo' =>
                            'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'title' => 'Wisuda ke 4 Tahun Bali Cak Tourism School',
                        'sub_title' => 'Sekitar 300 orang hadir dalam wisuda kali ini Bali Cak School menjadi
                                saksi perjalanan para alumni menuju dunia profesional.',
                        'date' => 'August 30, 2025',
                        'photo' =>
                            'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=900&q=80',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($blogs as $item)
                    <div class="bg-[#2B2B28] rounded-3xl overflow-hidden shadow-lg group transition">
                        <!-- Image -->
                        <div class="relative h-70 overflow-hidden">
                            <img src={{ $item['photo'] }} alt="Activity Image"
                                class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col justify-between min-h-55">
                            <div>
                                <h3 class="text-[#E3B04B] font-semibold text-sm uppercase leading-snug">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-gray-200 text-sm mt-2 leading-relaxed line-clamp-3">
                                    {{ $item['sub_title'] }}
                                </p>
                            </div>

                            <div class="flex items-center justify-between mt-6">
                                <span class="text-xs text-gray-400 uppercase tracking-wide">
                                    {{ $item['date'] }}
                                </span>
                                <a href="#"
                                    class="text-sm font-semibold text-white flex items-center gap-1 hover:text-[#E3B04B] transition">
                                    Read More
                                    <i data-lucide="arrow-right" class="w-4 h-4 text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="partnership" class="relative min-h-screen scroll-mt-24 bg-[#2B2B28] overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -left-20 top-10 w-72 h-72 bg-[#E3B04B]/10 rounded-full blur-3xl"></div>
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

    @push('scripts')
        @vite('resources/js/pages/homepage/index.js')
    @endpush
@endsection
