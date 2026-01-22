@extends('layouts.blank')

@section('title', 'Registration | Bali Cak Tourism School')

@section('content')
    <section class="relative bg-[#2B2B28] text-white overflow-hidden">
        <div class="absolute -top-24 -left-16 h-64 w-64 bg-[#E3B04B]/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 right-0 h-72 w-72 bg-white/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto max-w-6xl px-4 sm:px-6 pt-24 pb-16 md:pt-28 md:pb-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <div class="lg:col-span-2 space-y-8">

                    <div class="space-y-3">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[#E3B04B] text-xs font-semibold tracking-[0.2em] uppercase">
                            Registration
                        </div>
                        <h1 class="text-3xl md:text-4xl font-semibold leading-tight">
                            Apply to Become a Bali Cak Tourism School Student
                        </h1>
                        <p class="text-gray-300 text-sm md:text-base leading-relaxed max-w-3xl">
                            Complete the form to join the selection and receive an interview schedule.
                            Our admission team will contact you within 2x24 hours.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-gray-300">
                            <span class="inline-flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                Intake 2025: Feb & July
                            </span>
                            <span class="inline-flex items-center gap-2">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                                Approx. 5 minutes
                            </span>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-3xl p-6 md:p-8 backdrop-blur-md shadow-2xl">
                        <form class="space-y-6" action="#" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-sm text-gray-200">Full Name</label>
                                    <input type="text" name="full_name" required
                                        class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm text-gray-200">Email</label>
                                    <input type="email" name="email" required
                                        class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm text-gray-200">Phone/WhatsApp</label>
                                    <input type="tel" name="phone" required
                                        class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm text-gray-200">Program Choice</label>
                                    <select name="program"
                                        class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white focus:border-[#E3B04B] focus:ring-0">
                                        <option class="bg-[#1E1E1B]">Hospitality & Front Office</option>
                                        <option class="bg-[#1E1E1B]">Housekeeping & Room Division</option>
                                        <option class="bg-[#1E1E1B]">Food & Beverage Service</option>
                                        <option class="bg-[#1E1E1B]">Culinary & Pastry</option>
                                        <option class="bg-[#1E1E1B]">Cruise Line Preparation</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm text-gray-200">Place Of Birth</label>
                                    <input type="text" name="place_of_birth" required
                                        class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm text-gray-200">Date of Birth</label>
                                    <input type="date" name="date_of_birth" required placeholder="YYYY-MM-DD"
                                        class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Address</label>
                                <textarea name="note" rows="4"
                                    class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0"></textarea>
                            </div>

                            <div
                                class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-sm text-gray-300">
                                <span class="inline-flex items-center gap-2">
                                    <span class="h-2 w-2 rounded-full bg-[#E3B04B]"></span>
                                    Admission will contact you via WhatsApp within 2x24 hours.
                                </span>
                                <button type="submit"
                                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#E3B04B] text-[#2B2B28] font-semibold shadow-lg shadow-[#E3B04B]/30 hover:translate-y-0.5 transition">
                                    Submit Application
                                    <i data-lucide="send" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center justify-between pt-12 text-sm text-gray-300">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center gap-2 text-white hover:text-[#E3B04B] transition">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            Go To Homepage
                        </a>
                    </div>
                </div>


                <aside class="space-y-5">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <p class="text-white font-semibold mb-3">Registration Steps</p>
                        <ol class="space-y-2 text-sm text-gray-300 list-decimal list-inside">
                            <li>Submit the online registration form.</li>
                            <li>Consultation & document check via WhatsApp/phone.</li>
                            <li>Short interview and registration payment.</li>
                            <li>Receive LoA and orientation schedule.</li>
                        </ol>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5 space-y-3">
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            <span>Admission: +62 812-3456-7890</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                            <span>admission@balicakschool.id</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Jl. Tukad Balian No. 12, Denpasar</span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center gap-2 mt-2 text-[#E3B04B] font-semibold hover:underline">
                            View requirements & fees
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <p class="text-sm text-gray-300 mb-2">Need quick help?</p>
                        <a href="#"
                            class="inline-flex items-center justify-center gap-2 w-full px-4 py-3 rounded-xl bg-[#E3B04B] text-[#2B2B28] font-semibold shadow-lg shadow-[#E3B04B]/30 hover:translate-y-0.5 transition">
                            Chat Admission
                            <i data-lucide="message-circle" class="w-5 h-5"></i>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
