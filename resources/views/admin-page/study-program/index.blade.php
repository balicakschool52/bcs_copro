@extends('layouts.admin')

@section('title', 'Study Program | Bali Cak Tourism School')

@section('content')
    <div class="px-4 py-6 lg:px-10 xl:px-30 md:py-8 space-y-6">
        {{-- TABLE --}}
        <div class="bg-white border border-gray-100 shadow-sm rounded-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200  flex justify-between items-center gap-2 text-sm text-gray-600 mb-2">
                <p class="text-lg">Study Program</p>
                <a href="#"
                    class="inline-flex items-center gap-2 bg-green-600 text-white px-5 py-3 rounded-2xl shadow-lg  hover:bg-green-500 transition">
                    <i data-lucide="plus" class="h-4 w-4"></i>
                    Create Data
                </a>
            </div>

            <div class="overflow-x-auto p-3">
                <table id="studyProgramTable" class="min-w-full text-sm divide-y divide-gray-100">
                    <thead class="bg-gray-50 text-gray-600">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold">No</th>
                            <th class="px-6 py-3 text-left font-semibold">Program Name</th>
                            <th class="px-6 py-3 text-left font-semibold">Grade</th>
                            <th class="px-6 py-3 text-left font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($studyProgram as $program)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-[#2B2B28]">
                                        {{ $program->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex rounded-full bg-[#E3B04B]/10 px-3 py-1 text-xs font-semibold text-[#E3B04B]">
                                        {{ $program->grade == 1 ? 'Basic' : 'Middle' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 space-x-2">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-yellow-600 hover:text-yellow-500 transition">
                                        <i data-lucide="edit-2" class="h-4 w-4"></i>
                                    </a>
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-red-600 hover:text-red-500 transition">
                                        <i data-lucide="trash-2" class="h-4 w-4"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-8 text-gray-500">
                                    Tidak ada data tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')
        @vite('resources/js/pages/admin-pages/study-program/index.js')
    @endpush
@endsection
