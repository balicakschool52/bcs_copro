<div id="studyProgramModal"
    class="fixed inset-0 z-50 hidden flex items-start justify-center bg-black/40 px-4 py-10 overflow-y-auto">
    <div class="relative w-full max-w-xl">
        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
            <div class="flex items-start justify-between px-6 py-4 border-b border-gray-100">
                <div>
                    <h3 id="studyProgramModalTitle" class="text-lg font-semibold text-gray-800">
                        Create Study Program
                    </h3>
                    <p id="studyProgramModalSubtitle" class="text-sm text-gray-500">
                        Tambahkan program studi baru untuk ditampilkan di tabel.
                    </p>
                </div>
                <button type="button" data-modal-close
                    class="inline-flex items-center justify-center rounded-full p-2 text-gray-500 hover:bg-gray-100 transition">
                    <i data-lucide="x" class="h-5 w-5"></i>
                </button>
            </div>

            <form id="studyProgramForm" class="px-6 py-6 space-y-5">
                @csrf
                <input type="hidden" id="studyProgramId" name="id" value="">

                <div class="space-y-2">
                    <label for="studyProgramName" class="text-sm font-medium text-gray-700">Program Name</label>
                    <input id="studyProgramName" name="name" type="text" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm text-gray-800 focus:border-green-500 focus:ring-green-500"
                        placeholder="Contoh: Hospitality Management">
                    <p data-error="name" class="text-xs text-red-600 hidden"></p>
                </div>

                <div class="space-y-2">
                    <label for="studyProgramGrade" class="text-sm font-medium text-gray-700">Grade</label>
                    <select id="studyProgramGrade" name="grade" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm text-gray-800 focus:border-green-500 focus:ring-green-500 bg-white">
                        <option value="" disabled selected>Pilih tingkat</option>
                        <option value="1">Basic</option>
                        <option value="2">Middle</option>
                    </select>
                    <p data-error="grade" class="text-xs text-red-600 hidden"></p>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <p data-error="general" class="text-sm text-red-600 hidden"></p>
                    <div class="space-x-3">
                        <button type="button" data-modal-close
                            class="px-4 py-2 rounded-xl border border-gray-200 text-sm text-gray-700 hover:bg-gray-50 transition">
                            Batal
                        </button>
                        <button id="studyProgramSubmitButton" type="submit"
                            class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-green-600 text-white text-sm font-semibold shadow-lg hover:bg-green-500 transition">
                            <span id="studyProgramSubmitLabel">Simpan</span>
                            <span id="studyProgramSubmitSpinner" class="hidden">
                                <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
