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
        <div class="w-full h-30 bg-[#2B2B28] lg:mt-24"></div>
    </section>
    <section id="education" class="relative min-h-screen scroll-mt-24 bg-[#2B2B28] overflow-hidden">
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


@endsection
