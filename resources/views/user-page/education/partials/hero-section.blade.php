 <section id="hero-section"
     class="relative bg-[#2B2B28] w-full min-h-screen flex items-center overflow-hidden scroll-mt-24">
     <div class="container mx-auto max-w-6xl px-4 sm:px-6 pt-24 pb-16 md:pt-20 relative">
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center ">
             <div class="space-y-6">
                 <div
                     class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[#E3B04B] text-xs font-semibold tracking-[0.2em] uppercase">
                     Education Pathways
                 </div>
                 <h1 class="text-3xl md:text-5xl font-semibold text-white leading-tight">
                     Design Your Hospitality Career with Bali Cak Tourism School
                 </h1>
                 <p class="text-gray-300 text-sm md:text-base leading-relaxed max-w-2xl">
                     Industry-crafted study programs, practitioner mentors, and global internship tracks.
                     From service fundamentals to cruise ship specializations—mapped to where you want to go.
                 </p>
                 <div class="flex flex-col sm:flex-row gap-3">
                     <a href="#partnership"
                         class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#E3B04B] text-[#2B2B28] font-semibold shadow-lg shadow-[#E3B04B]/30 hover:translate-y-0.5 transition">
                         View Industry Partners
                         <i data-lucide="arrow-right" class="w-4 h-4"></i>
                     </a>
                 </div>
                 <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4">
                     <div class="bg-white/5 border border-white/10 rounded-2xl p-4">
                         <p class="text-2xl font-semibold text-white">6</p>
                         <p class="text-xs text-gray-300 mt-1">Applied study programs</p>
                     </div>
                     <div class="bg-white/5 border border-white/10 rounded-2xl p-4">
                         <p class="text-2xl font-semibold text-white">95%</p>
                         <p class="text-xs text-gray-300 mt-1">Graduates hired</p>
                     </div>
                     <div class="bg-white/5 border border-white/10 rounded-2xl p-4">
                         <p class="text-2xl font-semibold text-white">3 Country</p>
                         <p class="text-xs text-gray-300 mt-1">Active internship countries</p>
                     </div>
                 </div>
             </div>

             <div class="relative">
                 <div
                     class="absolute -inset-6 bg-linear-to-br from-white/5 via-white/0 to-white/5 rounded-3xl blur-3xl">
                 </div>
                 <div
                     class="relative bg-white/5 border border-white/10 rounded-3xl p-4 md:p-5 shadow-2xl backdrop-blur-xl overflow-hidden">
                     @php
                         $slides = [
                             [
                                 'image' =>
                                     'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1200&q=80',
                                 'title' => 'Front Office Lab',
                                 'caption' => 'Simulated check-in counters with live practice scenarios.',
                             ],
                             [
                                 'image' =>
                                     'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80',
                                 'title' => 'Culinary & F&B Service',
                                 'caption' => 'Plating, barista, and banquet service led by industry mentors.',
                             ],
                             [
                                 'image' =>
                                     'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1200&q=80',
                                 'title' => 'Cruise Readiness',
                                 'caption' => 'Safety, grooming, and interview drills for cruise placements.',
                             ],
                         ];
                     @endphp

                     <div id="hero-slider" class="relative aspect-4/3 rounded-2xl overflow-hidden">
                         @foreach ($slides as $index => $slide)
                             <div class="absolute inset-0 transition-all duration-700 ease-out {{ $index === 0 ? 'opacity-100 translate-x-0 z-20' : 'opacity-0 translate-x-6 z-10' }}"
                                 data-slide="{{ $index }}">
                                 <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}"
                                     class="w-full h-full object-cover">
                                 <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent">
                                 </div>
                                 <div class="absolute bottom-6 left-6 right-6">
                                     <p class="text-white font-semibold text-lg">{{ $slide['title'] }}</p>
                                     <p class="text-gray-200 text-sm mt-1">{{ $slide['caption'] }}</p>
                                 </div>
                             </div>
                         @endforeach

                         <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl"></div>
                         <div class="absolute bottom-4 left-4 flex gap-2">
                             @foreach ($slides as $index => $slide)
                                 <button type="button"
                                     class="h-2.5 w-8 rounded-full transition-all duration-300 bg-white/30 {{ $index === 0 ? 'bg-[#E3B04B] w-10' : '' }}"
                                     data-dot="{{ $index }}"></button>
                             @endforeach
                         </div>
                         <div class="absolute top-4 right-4 flex gap-2">
                             <button type="button"
                                 class="h-9 w-9 rounded-full bg-black/40 border border-white/20 text-white grid place-items-center hover:bg-black/60 transition"
                                 data-prev>
                                 <i data-lucide="chevron-left" class="w-4 h-4"></i>
                             </button>
                             <button type="button"
                                 class="h-9 w-9 rounded-full bg-black/40 border border-white/20 text-white grid place-items-center hover:bg-black/60 transition"
                                 data-next>
                                 <i data-lucide="chevron-right" class="w-4 h-4"></i>
                             </button>
                         </div>
                     </div>
                     <div class="flex items-center justify-between mt-4 text-xs text-gray-200">
                         <span class="inline-flex items-center gap-2">
                             <span class="h-2 w-2 rounded-full bg-[#E3B04B]"></span>
                             Campus showcase
                         </span>
                         <span>Auto-play | Hover to pause</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
