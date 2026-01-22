 <section id="blog" class="relative min-h-screen scroll-mt-24 overflow-hidden">
     <div class="container mx-auto max-w-6xl px-4 sm:px-6 py-10 md:py-20">
         <div class="text-start space-y-4 mb-10 md:mb-16">
             <p class="text-md font-semibold tracking-[0.3em] text-[#E3B04B] uppercase">
                 Activity Of
             </p>

             <p class="text-2xl lg:text-4xl font-semibold text-gray-800 -mt-4">
                 Bali Cak Tourism School
             </p>

             <p class="text-gray-400 text-sm lg:text-md leading-relaxed max-w-3xl">
                 Capturing moments of learning, creativity, and togetherness where students grow,
                 explore their potential, and prepare themselves for a successful future in tourism
                 and hospitality industries.
             </p>
             <!-- Search -->
             <div class="w-full max-w-xl">
                 <div
                     class="flex items-center bg-white border border-gray-300 rounded-full px-5 py-3 shadow-sm focus-within:ring-2 focus-within:ring-[#E3B04B] transition">
                     <!-- Input -->
                     <input type="text" placeholder="Search..."
                         class="flex-1 outline-none bg-transparent text-sm text-gray-700 placeholder-gray-400 focus:outline-none" />

                     <!-- Icon -->
                     <button class="ml-3 text-gray-600 hover:text-black transition">
                         <i data-lucide="search" class="w-4 h-4 text-black"></i>
                     </button>
                 </div>
             </div>
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

         <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-6">
             @foreach (collect($blogs)->take(6) as $item)
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
                             <a href="{{ url('activity-detail') }}"
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
