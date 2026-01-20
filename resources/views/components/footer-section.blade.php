{{-- MAP + CONTACT INFO --}}
<section class="py-16 bg-linear-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6 grid grid-cols-1 xl:grid-cols-5 gap-10 items-center">

        {{-- MAP --}}
        <div class="xl:col-span-3 w-full h-80 rounded-2xl overflow-hidden border shadow-lg">
            <iframe class="w-full h-full"
                src="https://www.google.com/maps?q=Jl.%20Wisnu%20Margana%20No.39,%20Tabanan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        {{-- CONTACT INFO --}}
        <div class="xl:col-span-2 bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <div class="flex items-center gap-3 mb-4">
                <div class="h-11 w-11 rounded-xl bg-[#E3B04B] text-white grid place-items-center font-semibold">BC</div>
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-gray-500">Contact</p>
                    <p class="text-lg font-semibold text-gray-900">Bali Cak Tourism School</p>
                </div>
            </div>
            <ul class="space-y-4 text-gray-700">
                <li class="flex items-start gap-3">
                    <i data-lucide="map-pin" class="w-5 h-5 text-[#E3B04B] mt-0.5"></i>
                    <span>Jl. Wisnu Margana No.39, Marga, Tabanan 82181</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="mail" class="w-5 h-5 text-[#E3B04B] mt-0.5"></i>
                    <span>info@balicakschool.com</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="phone" class="w-5 h-5 text-[#E3B04B] mt-0.5"></i>
                    <span>+62 877-7219-3167</span>
                </li>
            </ul>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="#" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#2B2B28] text-white text-sm font-semibold hover:bg-black transition">
                    <i data-lucide="send" class="w-4 h-4"></i> Send Message
                </a>
            </div>
        </div>

    </div>
</section>

{{-- FOOTER --}}
<footer class="relative bg-[#1F1F1D] text-gray-300 overflow-hidden">
    <div class="absolute -left-24 -top-24 w-72 h-72 rounded-full bg-[#E3B04B]/10 blur-3xl"></div>
    <div class="absolute right-0 bottom-0 w-80 h-80 rounded-full bg-orange-500/10 blur-3xl"></div>

    <div class="container mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-4 gap-10 relative z-10">

        {{-- LOGO --}}
        <div class="space-y-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-32">
            <p class="text-sm leading-relaxed text-gray-300">
                Bali Cak Tourism School is committed to creating professional hospitality graduates with international
                standards.
            </p>
            <div class="flex items-center gap-2 text-sm text-gray-400">
                <span class="h-2 w-2 rounded-full bg-[#E3B04B]"></span>
                <span>Trusted by industry partners worldwide</span>
            </div>
        </div>

        {{-- NAVIGATION --}}
        <div>
            <h4 class="text-white font-semibold mb-4 uppercase tracking-wide">Navigate</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:text-white transition">Home</a></li>
                <li><a href="#education" class="hover:text-white transition">Education</a></li>
                <li><a href="#about-us" class="hover:text-white transition">About Us</a></li>
                <li><a href="#blog" class="hover:text-white transition">Activity</a></li>
                <li><a href="#partnership" class="hover:text-white transition">Partnership</a></li>
            </ul>
        </div>

        {{-- CONTACT DETAIL --}}
        <div>
            <h4 class="text-white font-semibold mb-4 uppercase tracking-wide">Contact</h4>
            <ul class="space-y-3 text-sm">
                <li class="flex gap-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-[#E3B04B] mt-0.5"></i>
                    <span>Jl. Wisnu Margana No.39, Marga, Tabanan 82181</span>
                </li>
                <li class="flex gap-3">
                    <i data-lucide="phone" class="w-4 h-4 text-[#E3B04B] mt-0.5"></i>
                    <span>+62 877-7219-3167</span>
                </li>
                <li class="flex gap-3">
                    <i data-lucide="mail" class="w-4 h-4 text-[#E3B04B] mt-0.5"></i>
                    <span>balicakschool@gmail.com</span>
                </li>
            </ul>
        </div>

        {{-- NEWSLETTER --}}
        <div>
            <h4 class="text-white font-semibold mb-4 uppercase tracking-wide">Newsletter</h4>
            <p class="text-sm text-gray-300 mb-4">Get program updates, campus news, and recruitment openings.</p>
            <form class="space-y-3">
                <div class="flex items-center rounded-full bg-white/10 border border-white/20 overflow-hidden">
                    <input type="email" placeholder="Your email"
                        class="w-full bg-transparent px-4 py-2 text-sm text-white placeholder:text-gray-400 focus:outline-none">
                    <button type="button" class="px-4 py-2 bg-[#E3B04B] text-white text-sm font-semibold hover:bg-yellow-400 transition">
                        Subscribe
                    </button>
                </div>
                <p class="text-xs text-gray-400">We respect your privacy. Unsubscribe anytime.</p>
            </form>
        </div>

    </div>

    {{-- BOTTOM --}}
    <div class="border-t border-white/10 py-6 relative z-10">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
            <p>© {{ date('Y') }} Bali Cak Tourism School. All rights reserved.</p>

            <div class="flex gap-3">
                <a href="#" class="h-9 w-9 grid place-items-center rounded-full border border-white/20 text-white/70 hover:text-white hover:border-white/40 transition">
                    <i data-lucide="instagram" class="w-4 h-4"></i>
                </a>
                <a href="#" class="h-9 w-9 grid place-items-center rounded-full border border-white/20 text-white/70 hover:text-white hover:border-white/40 transition">
                    <i data-lucide="facebook" class="w-4 h-4"></i>
                </a>
                <a href="#" class="h-9 w-9 grid place-items-center rounded-full border border-white/20 text-white/70 hover:text-white hover:border-white/40 transition">
                    <i data-lucide="linkedin" class="w-4 h-4"></i>
                </a>
                <a href="#" class="h-9 w-9 grid place-items-center rounded-full border border-white/20 text-white/70 hover:text-white hover:border-white/40 transition">
                    <i data-lucide="youtube" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
