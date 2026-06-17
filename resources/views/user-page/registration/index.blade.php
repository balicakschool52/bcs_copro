@extends('layouts.blank')

@section('title', 'Registration | Bali Cak Tourism School')

@section('content')
<section class="relative bg-[#2B2B28] text-white overflow-hidden">
    <div class="absolute -top-24 -left-16 h-64 w-64 bg-[#E3B04B]/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-20 right-0 h-72 w-72 bg-white/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto max-w-6xl px-4 sm:px-6 pt-24 pb-16 md:pt-28 md:pb-20">
        <div id="form-general-error" class="hidden bg-red-500/10 border border-red-500/50 text-red-400 p-4 rounded-2xl text-sm mb-6"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <div class="lg:col-span-2 space-y-8">

                <div class="space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-[#E3B04B] text-xs font-semibold tracking-[0.2em] uppercase">
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
                    <form id="registration-form" class="space-y-6" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Phone/WhatsApp <span class="text-red-500">*</span></label>
                                <input type="tel" name="phone_number" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Program Choice <span class="text-red-500">*</span></label>
                                <select name="study_program_id" id="study-program-select" class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white focus:border-[#E3B04B] focus:ring-0">
                                    <option class="bg-[#1E1E1B]" value="" disabled selected>-- Pilih Program Studi --</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Place Of Birth <span class="text-red-500">*</span></label>
                                <input type="text" name="place_of_birth" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Date of Birth <span class="text-red-500">*</span></label>
                                <input type="date" name="date_of_birth" required placeholder="YYYY-MM-DD" class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <label class="text-sm text-gray-200">Address <span class="text-red-500">*</span></label>
                                <textarea name="address" rows="4" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0"></textarea>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Previous School <span class="text-red-500">*</span></label>
                                <input type="text" name="previous_school" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Graduation Year <span class="text-red-500">*</span></label>
                                <input type="text" name="graduation_year" required class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Reference <span class="text-gray-500 text-xs">(optional)</span></label>
                                <input type="text" name="reference" class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">Referral Code <span class="text-gray-500 text-xs">(optional)</span></label>
                                <div class="relative w-full">
                                    <input id="referral-input" type="text" name="referral_code" autocomplete="off" class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-4 py-3 pr-20 text-white placeholder:text-gray-500 focus:border-[#E3B04B] focus:ring-0 transition-all">
                                    <button id="referral-btn" type="button" class="absolute right-2 top-1/2 -translate-y-1/2 bg-[#E3B04B] hover:bg-[#c99a3b] text-[#1E1E1B] text-xs font-bold py-1.5 px-4 rounded-xl transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                        CHECK
                                    </button>
                                </div>
                                <p id="referral-message" class="text-sm h-5 invisible"></p>
                            </div>
                        </div>

                        <div class="col-span-2 space-y-5 mt-4">
                            <div class="bg-[#1E1E1B] border border-[#E3B04B]/40 rounded-2xl p-5 shadow-lg">
                                <h3 class="text-[#E3B04B] text-sm font-bold mb-2 uppercase tracking-wide">
                                    Registration Payment Information
                                </h3>
                                <p class="text-sm text-gray-300 mb-3">
                                    Please transfer the registration fee to the following account:
                                </p>

                                <div class="bg-black/30 rounded-xl p-4 border border-white/5 space-y-1">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs text-gray-400">Bank</span>
                                        <span class="text-sm font-bold text-white">BCA</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs text-gray-400">Account Number</span>
                                        <span class="text-sm font-bold text-[#E3B04B] tracking-wider">1234 567 890</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs text-gray-400">Account Name</span>
                                        <span class="text-sm font-bold text-white">Bali Cak Tourism School</span>
                                    </div>

                                    <div class="flex justify-between items-center pt-3 mt-2 border-t border-white/10">
                                        <span class="text-xs text-gray-400 font-semibold uppercase">Total Transfer</span>
                                        <div class="flex items-center gap-2">
                                            <span id="original-amount-text" class="text-sm text-gray-500 line-through hidden">IDR 200,000</span>
                                            <span id="final-amount-text" class="text-lg font-bold text-[#E3B04B]">IDR 200,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm text-gray-200">
                                    Upload Proof of Payment
                                </label>
                                <input type="file" name="payment_proof" id="payment_proof" accept="image/png, image/jpeg, image/jpg" class="w-full bg-[#1E1E1B] border border-white/10 rounded-2xl px-3 py-2 text-gray-300 focus:border-[#E3B04B] focus:ring-0 transition-all cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-[#E3B04B] file:text-[#1E1E1B] hover:file:bg-[#c99a3b] file:cursor-pointer file:transition-colors">
                                <p id="payment-proof-error" class="text-xs text-red-500 mt-1 hidden"></p>
                                <p class="text-xs text-gray-500 mt-1">
                                    Supported formats: JPG, JPEG, PNG. Maximum file size 2MB.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-sm text-gray-300">
                            <span class="inline-flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-[#E3B04B]"></span>
                                Admission will contact you via WhatsApp within 2x24 hours.
                            </span>
                            <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#E3B04B] text-[#2B2B28] font-semibold shadow-lg shadow-[#E3B04B]/30 hover:translate-y-0.5 transition">
                                Submit Application
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex items-center justify-between pt-12 text-sm text-gray-300">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-white hover:text-[#E3B04B] transition">
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
                    <a href="#" class="inline-flex items-center gap-2 mt-2 text-[#E3B04B] font-semibold hover:underline">
                        View requirements & fees
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                    <p class="text-sm text-gray-300 mb-2">Need quick help?</p>
                    <a href="https://wa.me/6281339582889" target="_blank" class="inline-flex items-center justify-center gap-2 w-full px-4 py-3 rounded-xl bg-[#E3B04B] text-[#2B2B28] font-semibold shadow-lg shadow-[#E3B04B]/30 hover:translate-y-0.5 transition">
                        Chat Admission
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection