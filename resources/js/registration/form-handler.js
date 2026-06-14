export function initFormHandler(config) {
    const { registrationForm, generalErrorContainer, paymentProofInput } = config;

    if (paymentProofInput) {
        paymentProofInput.addEventListener('change', function () {
            const file = this.files[0];
            const errorContainer = document.getElementById('payment-proof-error');

            if (!errorContainer) return;

            if (file) {
                const maxSizeInBytes = 2 * 1024 * 1024;

                if (file.size > maxSizeInBytes) {
                    errorContainer.innerText = 'Ukuran file terlalu besar! Maksimal ukuran file adalah 2MB.';
                    errorContainer.classList.remove('hidden');
                    this.classList.add('border-red-500', 'focus:border-red-500');
                    this.value = '';
                } else {
                    errorContainer.classList.add('hidden');
                    errorContainer.innerText = '';
                    this.classList.remove('border-red-500', 'focus:border-red-500');
                }
            }
        });
    }

    if (registrationForm) {
        // 1. PASTIKAN ADA KATA 'async' DI SINI
        registrationForm.addEventListener('submit', async function (e) {
            e.preventDefault();

            const submitBtn = registrationForm.querySelector('button[type="submit"]');
            const originalSubmitBtnText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Processing...';

            if (generalErrorContainer) {
                generalErrorContainer.classList.add('hidden');
                generalErrorContainer.innerText = '';
            }
            clearValidationErrors(registrationForm);

            const formData = new FormData(registrationForm);

            try {
                // 2. Pop-up konfirmasi pendaftaran pertama
                const confirmation = await Swal.fire({
                    title: "Apakah kamu yakin data sudah benar?",
                    text: "Pastikan semua data formulir dan berkas sudah sesuai.",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: '#E3B04B',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Ya, Simpan!",
                    cancelButtonText: "Batal"
                });

                // JIKA USER MENGKLIK BATAL, PROSES BERHENTI DI SINI
                if (!confirmation.isConfirmed) {
                    // PENTING: Kembalikan state tombol sebelum keluar!
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalSubmitBtnText;
                    return;
                }

                // 3. Proses kirim data ke Laravel backend
                const response = await axios.post("/api/registrations", formData, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                });

                const apiResult = response.data;

                if (response.status === 200 && apiResult?.meta?.status === 'success') {

                    // Ambil data langsung dari formData
                    const namaSiswa = formData.get('name') || '';
                    const nomorHp = formData.get('phone_number') || '';

                    const selectEl = registrationForm.querySelector('[name="study_program_id"]');
                    const prodiText = selectEl ? selectEl.options[selectEl.selectedIndex]?.text : '';

                    const pesanWA = `Halo Admin Bali Cak Tourism School, saya telah melakukan pendaftaran online.\n\n` +
                        `Nama: ${namaSiswa}\n` +
                        `No. HP: ${nomorHp}\n` +
                        `Program Pilihan: ${prodiText}`;

                    const urlWhatsApp = `https://wa.me/6281339582889?text=${encodeURIComponent(pesanWA)}`;

                    await Swal.fire({
                        title: 'Pendaftaran Berhasil!',
                        text: 'Langkah terakhir, silakan klik tombol di bawah untuk mengirimkan konfirmasi pendaftaran ke WhatsApp Admin.',
                        icon: 'success',
                        confirmButtonColor: '#25D366',
                        confirmButtonText: '<i class="fab fa-whatsapp"></i> Kirim Konfirmasi ke WhatsApp',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });

                    window.open(urlWhatsApp, '_blank');
                    window.location.href = "/registration";
                }

            } catch (error) {
                console.error('Error Submit Form:', error);

                if (error.response && error.response.status === 422) {
                    const validationErrors = error.response.data.errors;
                    displayValidationErrors(validationErrors);

                    if (generalErrorContainer && error.response?.data?.meta?.message) {
                        generalErrorContainer.innerText = error.response.data.meta.message;
                        generalErrorContainer.classList.remove('hidden');
                    }

                    Swal.fire({
                        title: 'Cek Kembali Formulir!',
                        text: 'Ada beberapa data yang belum diisi atau tidak sesuai format.',
                        icon: 'warning',
                        confirmButtonColor: '#d33'
                    });

                } else {
                    const errorMessage = error.response?.data?.meta?.message || 'Terjadi kesalahan sistem atau masalah jaringan.';

                    Swal.fire({
                        title: 'Oops... Terjadi Kesalahan',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonColor: '#d33'
                    });
                }
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalSubmitBtnText;
            }
        });
    }
}

function displayValidationErrors(errors) {
    Object.keys(errors).forEach(field => {
        const inputField = document.querySelector(`[name="${field}"]`);
        if (inputField) {
            inputField.classList.add('border-red-500', 'focus:border-red-500');

            const errorElement = document.createElement('div');
            errorElement.className = 'text-red-500 text-xs mt-1 validation-error-message';
            errorElement.innerText = errors[field][0];

            inputField.parentNode.insertBefore(errorElement, inputField.nextSibling);
        }
    });
}

function clearValidationErrors(form) {
    const errorFields = form.querySelectorAll('.border-red-500');
    errorFields.forEach(field => {
        field.classList.remove('border-red-500', 'focus:border-red-500');
    });

    const errorMessages = form.querySelectorAll('.validation-error-message');
    errorMessages.forEach(msg => msg.remove());
}