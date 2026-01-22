@extends('layouts.blog')

@section('title', 'Activity Detail | Bali Cak Tourism School')

@section('content')
    <section class="relative bg-[#2B2B28] text-white overflow-hidden">
        <div class="container mx-auto max-w-5xl px-4 sm:px-6 pt-24 pb-16 md:pt-28 md:pb-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2 space-y-8">
                    <div class="space-y-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[#E3B04B] text-xs font-semibold tracking-[0.2em] uppercase">
                            Campus Life
                        </div>
                        <h1 class="text-3xl md:text-4xl font-semibold leading-tight">
                            Simulasi Front Office: Dari Check-in Hingga Complaint Recovery
                        </h1>
                        <div class="flex flex-wrap items-center gap-3 text-sm text-gray-300">
                            <div class="inline-flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                12 September 2025
                            </div>
                            <span class="h-1 w-1 rounded-full bg-white/30"></span>
                            <div class="inline-flex items-center gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                Lab Front Office, Denpasar
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-3xl overflow-hidden border border-white/10">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1600&q=80"
                            alt="Simulasi front office Bali Cak Tourism School"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/20 to-transparent"></div>
                    </div>

                    <article class="prose prose-invert prose-sm md:prose-base max-w-none prose-headings:text-white prose-p:text-gray-200 prose-strong:text-white prose-li:text-gray-200 prose-blockquote:text-gray-200">
                        <p>
                            Mahasiswa Bali Cak Tourism School mengikuti sesi simulasi front office yang menekankan
                            kecepatan, ketelitian, dan empati. Latihan berlangsung dengan skenario tamu yang beragam:
                            bisnis traveler, keluarga liburan, dan tamu dengan komplain mendesak.
                        </p>

                        <h2>Alur Pelatihan</h2>
                        <ul>
                            <li>Briefing SOP check-in, up-selling kamar, dan service recovery.</li>
                            <li>Roleplay dengan tamu sungguhan dari hotel partner untuk validasi performa.</li>
                            <li>Debrief video playback untuk koreksi body language dan bahasa layanan.</li>
                        </ul>

                        <blockquote>
                            “Kecepatan bisa dilatih, tapi sentuhan personal yang membuat tamu tenang adalah kunci
                            diferensiasi,” — Coach Made, Front Office Trainer.
                        </blockquote>

                        <h3>Outcome untuk Mahasiswa</h3>
                        <p>
                            Setelah sesi, mahasiswa mendapatkan skor individual pada metric greeting, accuracy,
                            dan handling complaints. Beberapa peserta terpilih untuk interview magang di hotel
                            partner berkat performa service recovery yang menonjol.
                        </p>

                        <h3>Jadwal Berikutnya</h3>
                        <p>
                            Sesi lanjutan akan fokus pada night audit dan handling VIP arrival, termasuk koordinasi
                            dengan F&B untuk amenity setup.
                        </p>
                    </article>

                    <div class="flex flex-wrap items-center gap-3 pt-4">
                        <span class="text-xs text-gray-400 uppercase tracking-[0.2em]">Tags:</span>
                        <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-sm text-white">Front Office</span>
                        <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-sm text-white">Service Recovery</span>
                        <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-sm text-white">Campus Life</span>
                    </div>
                </div>

                <aside class="space-y-5">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <p class="text-sm text-gray-300 mb-3">Bagikan artikel</p>
                        <div class="flex gap-3">
                            <a href="#" class="h-10 w-10 rounded-full border border-white/10 flex items-center justify-center text-white hover:border-[#E3B04B] hover:text-[#E3B04B] transition">
                                <i data-lucide="share-2" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="h-10 w-10 rounded-full border border-white/10 flex items-center justify-center text-white hover:border-[#E3B04B] hover:text-[#E3B04B] transition">
                                <i data-lucide="twitter" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="h-10 w-10 rounded-full border border-white/10 flex items-center justify-center text-white hover:border-[#E3B04B] hover:text-[#E3B04B] transition">
                                <i data-lucide="facebook" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5 space-y-4">
                        <p class="text-white font-semibold">Kegiatan Lainnya</p>
                        <div class="space-y-3">
                            <a href="#" class="block p-3 rounded-xl bg-white/5 hover:bg-white/10 transition">
                                <p class="text-sm text-[#E3B04B] uppercase tracking-widest">Housekeeping Bootcamp</p>
                                <p class="text-xs text-gray-300">18 September 2025</p>
                            </a>
                            <a href="#" class="block p-3 rounded-xl bg-white/5 hover:bg-white/10 transition">
                                <p class="text-sm text-[#E3B04B] uppercase tracking-widest">Barista & Mixology Night</p>
                                <p class="text-xs text-gray-300">24 September 2025</p>
                            </a>
                            <a href="#" class="block p-3 rounded-xl bg-white/5 hover:bg-white/10 transition">
                                <p class="text-sm text-[#E3B04B] uppercase tracking-widest">Cruise Line Career Talk</p>
                                <p class="text-xs text-gray-300">18 October 2025</p>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="flex items-center justify-between pt-12 text-sm text-gray-300">
                <a href="{{ url('/campus-life') }}"
                    class="inline-flex items-center gap-2 text-white hover:text-[#E3B04B] transition">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali ke aktivitas
                </a>
            </div>
        </div>
    </section>
@endsection
