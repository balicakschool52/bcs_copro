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
                    <div class="absolute inset-0 -left-2 -top-2 sm:-left-6 sm:-top-6 rounded-3xl bg-gray-800 blur-3xl opacity-70 pointer-events-none">
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
        <div class="w-full h-30 bg-[#2B2B28]"></div>

    </section>
@endsection
