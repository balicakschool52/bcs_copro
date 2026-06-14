/**
 * @param {HTMLSelectElement} selectElement
 */
export async function loadStudyPrograms(selectElement) {
    if (!selectElement) return;

    try {
        const response = await axios.get('/api/get-study-programs');
        const programs = response.data.data || response.data;
        selectElement.innerHTML = '<option class="bg-[#1E1E1B]" value="" disabled selected>-- Pilih Program Studi --</option>';

        programs.forEach(program => {
            const option = document.createElement('option');
            option.className = 'bg-[#1E1E1B]';
            option.value = program.id;
            option.innerText = program.name;

            selectElement.appendChild(option);
        });

    } catch (error) {
        console.error('Gagal memuat program studi:', error);
        selectElement.innerHTML = '<option class="bg-[#1E1E1B]" value="" disabled>Gagal memuat data program</option>';
    }
}