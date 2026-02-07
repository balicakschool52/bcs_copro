@php
    $adminMenus = [
        [
            'section' => 'Menu',
            'items' => [
                [
                    'label' => 'Dashboard',
                    'url' => url('/admin'),
                    'icon' => 'home',
                    'active' => request()->is('admin'),
                ],
                [
                    'label' => 'Registration',
                    'url' => url('/admin/registrations'),
                    'icon' => 'clipboard-list',
                    'active' => request()->is('admin/registrations*'),
                ],
            ],
        ],
        [
            'section' => 'Master',
            'items' => [
                [
                    'label' => 'Study Program',
                    'url' => url('/admin/study-program'),
                    'icon' => 'book-open',
                    'active' => request()->is('admin/study-program*'),
                ],
                [
                    'label' => 'Users',
                    'url' => url('/admin/users'),
                    'icon' => 'users',
                    'active' => request()->is('admin/users*'),
                ],
                [
                    'label' => 'Settings',
                    'url' => url('/admin/settings'),
                    'icon' => 'settings',
                    'active' => request()->is('admin/settings*'),
                ],
            ],
        ],
    ];
@endphp



<div class="relative">
    <div class="fixed top-0 left-0 right-0 z-50 flex h-16 items-center justify-between bg-[#2B2B28] px-4 md:hidden">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo BCS" class="h-9 w-auto">
            <span class="text-sm font-semibold uppercase tracking-wide text-white">Admin</span>
        </div>
        <button id="admin-sidebar-toggle" class="text-white focus:outline-none" aria-label="Toggle sidebar">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="admin-sidebar-backdrop" class="fixed inset-0 z-40 hidden bg-black/50 transition-opacity md:hidden"
        aria-hidden="true"></div>

    <aside id="admin-sidebar"
        class="fixed left-0 top-0 z-50 h-screen w-64 -translate-x-full bg-[#2B2B28] text-white shadow-lg transition-transform md:translate-x-0 md:transition-[width]">
        <div class="flex h-20 items-center justify-between px-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo BCS"
                    class="sidebar-logo h-10 w-auto object-contain">
                <div>
                    <p class="sidebar-label text-xs uppercase text-[#E3B04B]">Bali Cak Tourism School</p>
                    <p class="sidebar-label text-sm font-semibold">Admin Panel</p>
                </div>
            </div>
        </div>
        <nav class="px-4 py-6 overflow-y-auto h-[calc(100vh-180px)] md:h-[calc(100vh-140px)]">
            @foreach ($adminMenus as $group)
                {{-- Sidebar Label --}}
                <p class="sidebar-label px-2 pb-3 text-xs uppercase tracking-[0.2em] text-gray-400">
                    {{ $group['section'] }}
                </p>

                {{-- Menu Items --}}
                <div class="space-y-2 text-sm mb-6">
                    @foreach ($group['items'] as $menu)
                        <a href="{{ $menu['url'] }}"
                            class="flex items-center gap-3 rounded-lg px-3 py-2 transition
                    {{ $menu['active'] ? 'bg-[#E3B04B] text-black' : 'text-white hover:bg-white/10' }}">

                            <i data-lucide="{{ $menu['icon'] }}" class="h-5 w-5"></i>

                            <span class="sidebar-label">
                                {{ $menu['label'] }}
                            </span>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </nav>

        <div class="mt-auto border-t border-white/10 px-4 py-5 text-sm">
            <a href="{{ url('/logout') }}"
                class="flex items-center gap-3 rounded-lg px-3 py-2 text-white hover:bg-[#3A3A34] transition">
                <span class="sidebar-icon">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                    </svg>
                </span>
                <span class="sidebar-label">Logout</span>
            </a>
        </div>
    </aside>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtn = document.getElementById('admin-sidebar-toggle');
            const sidebar = document.getElementById('admin-sidebar');
            const backdrop = document.getElementById('admin-sidebar-backdrop');
            const main = document.getElementById('admin-main');

            if (!toggleBtn || !sidebar || !backdrop || !main) return;

            const closeSidebar = () => {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.add('hidden');
            };

            toggleBtn.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                backdrop.classList.toggle('hidden');
            });

            backdrop.addEventListener('click', closeSidebar);
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768) {
                    sidebar.classList.remove('-translate-x-full');
                    backdrop.classList.add('hidden');
                }
            });
        });
    </script>
@endpush
