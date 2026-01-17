{{-- MAP + CONTACT INFO --}}
<section class="bg-white py-16">
    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

        {{-- MAP --}}
        <div class="w-full h-[300px] rounded overflow-hidden border">
            <iframe
                class="w-full h-full"
                src="https://www.google.com/maps?q=Jl.%20Wisnu%20Margana%20No.39,%20Tabanan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        {{-- CONTACT INFO --}}
        <div>
            <h3 class="text-lg font-semibold uppercase tracking-wide mb-6">
                For More Information
            </h3>

            <ul class="space-y-4 text-gray-700">
                <li class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Bali Cak Tourism School</span>
                </li>

                <li class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 12H8m0 0l4-4m-4 4l4 4"/>
                    </svg>
                    <span>info@balicakschool.com</span>
                </li>

                <li class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 5h2l3 7-1.5 2.5A2 2 0 008 18h9a2 2 0 002-2v-1"/>
                    </svg>
                    <span>+62 877-7219-3167</span>
                </li>
            </ul>
        </div>

    </div>
</section>

{{-- FOOTER --}}
<footer class="bg-[#2b2b2b] text-gray-300">
    <div class="container mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-3 gap-10">

        {{-- LOGO --}}
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo"
                 class="w-32 mb-4">
            <p class="text-sm leading-relaxed">
                Bali Cak Tourism School is committed to creating professional
                hospitality graduates with international standards.
            </p>
        </div>

        {{-- NAVIGATION --}}
        <div>
            <h4 class="text-white font-semibold mb-4 uppercase">Navigate</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li><a href="/education" class="hover:text-white">Education</a></li>
                <li><a href="/about-us" class="hover:text-white">About Us</a></li>
                <li><a href="/campus-life" class="hover:text-white">Campus Life</a></li>
            </ul>
        </div>

        {{-- CONTACT DETAIL --}}
        <div>
            <h4 class="text-white font-semibold mb-4 uppercase">Contact Detail</h4>
            <ul class="space-y-3 text-sm">
                <li class="flex gap-3">
                    <span>📍</span>
                    <span>Jl. Wisnu Margana No.39, Marga, Tabanan 82181</span>
                </li>
                <li class="flex gap-3">
                    <span>📞</span>
                    <span>+62 877-7219-3167</span>
                </li>
                <li class="flex gap-3">
                    <span>✉️</span>
                    <span>balicakschool@gmail.com</span>
                </li>
            </ul>
        </div>

    </div>

    {{-- BOTTOM --}}
    <div class="border-t border-gray-600 py-6">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
            <p>© {{ date('Y') }} Bali Cak Tourism School</p>

            <div class="flex gap-4">
                <a href="#" class="hover:text-white">Facebook</a>
                <a href="#" class="hover:text-white">Instagram</a>
                <a href="#" class="hover:text-white">Google</a>
                <a href="#" class="hover:text-white">TikTok</a>
            </div>
        </div>
    </div>
</footer>
