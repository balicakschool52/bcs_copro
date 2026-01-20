<nav class="bg-[#2B2B28] shadow-md fixed w-full top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('#') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo BCS" class="h-15 w-auto">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}"
                    class="text-white hover:text-[#E3B04B] transition text-sm md:text-xs lg:text-sm">
                    Home
                </a>
                <a href="#"
                    class="text-white hover:text-[#E3B04B] transition text-sm md:text-xs lg:text-sm">
                    Education
                </a>
                <a href="#"
                    class="text-white hover:text-[#E3B04B] transition text-sm md:text-xs lg:text-sm">
                    About Us
                </a>
                <a href="#"
                    class="text-white hover:text-[#E3B04B] transition text-sm md:text-xs lg:text-sm">
                    Campus Life
                </a>
                <a href="#"
                    class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition text-sm md:text-xs lg:text-sm">
                    Contact Us
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
            <a href="{{ url('/') }}" class="block py-2 text-white hover:text-blue-600">Beranda</a>
            <a href="#prestasi" class="block py-2  text-white hover:text-blue-600">Daftar
                Prestasi</a>
            <a href="#masuk" class="block py-2  text-white hover:text-blue-600">Masuk</a>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (!toggleBtn || !menu) return;

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
@endpush
