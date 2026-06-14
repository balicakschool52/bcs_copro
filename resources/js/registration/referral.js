export function initReferralHandler(config) {
    const { inputField, messageField, checkBtn, baseFee, updatePaymentUI, resetPaymentUI } = config;

    function setInputState(state, text = '') {
        inputField.classList.remove(
            'border-white/10', 'focus:border-[#E3B04B]',
            'border-red-500', 'focus:border-red-500',
            'border-green-500', 'focus:border-green-500'
        );
        messageField.classList.remove('text-red-500', 'text-green-500', 'invisible');
        messageField.textContent = text;

        if (state === 'error') {
            inputField.classList.add('border-red-500', 'focus:border-red-500');
            messageField.classList.add('text-red-500');
        } else if (state === 'success') {
            inputField.classList.add('border-green-500', 'focus:border-green-500');
            messageField.classList.add('text-green-500');
        } else {
            inputField.classList.add('border-white/10', 'focus:border-[#E3B04B]');
            messageField.classList.add('invisible');
        }
    }

    inputField.addEventListener('input', () => {
        setInputState('default');
        resetPaymentUI();
    });

    checkBtn.addEventListener('click', async function () {
        const value = inputField.value.trim();
        const originalBtnText = checkBtn.innerText;

        if (!value) {
            setInputState('error', 'Kode referral tidak boleh kosong.');
            return;
        }

        checkBtn.disabled = true;
        checkBtn.innerText = 'WAIT';

        try {
            const response = await axios.post("/api/code-referals/check", { code: value });
            const result = response.data;

            if (response.status === 200 && result?.data?.valid === true) {
                setInputState('success', result.meta.message || 'Kode valid!');

                const type = result.data.discount_type;
                const val = result.data.discount_value;
                let calculatedDiscount = 0;

                if (type === 1) {
                    calculatedDiscount = Math.floor(baseFee * (val / 100));
                } else {
                    calculatedDiscount = val;
                }

                updatePaymentUI(calculatedDiscount);
            } else {
                setInputState('error', result.meta.message || 'Kode tidak ditemukan.');
                resetPaymentUI();
            }
        } catch (error) {
            console.error('Error:', error);
            setInputState('error');
            resetPaymentUI();

            if (error.response && error.response.data?.meta?.message) {
                setInputState('error', error.response.data.meta.message);
            } else {
                setInputState('error', 'Kesalahan jaringan atau server.');
            }
        } finally {
            checkBtn.disabled = false;
            checkBtn.innerText = originalBtnText;
        }
    });
}