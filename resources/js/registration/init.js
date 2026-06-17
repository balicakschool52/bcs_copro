import { loadStudyPrograms } from './load-studyprogram.js';
import { initReferralHandler } from './referral.js';
import { initFormHandler } from './form-handler.js';

document.addEventListener('DOMContentLoaded', () => {
    const studyProgramSelectElement = document.getElementById('study-program-select');

    // Pelindung agar tidak error di halaman selain pendaftaran
    if (!studyProgramSelectElement) return;

    loadStudyPrograms(studyProgramSelectElement);

    const DOM = {
        studyProgramSelect: studyProgramSelectElement,
        inputField: document.getElementById('referral-input'),
        messageField: document.getElementById('referral-message'),
        checkBtn: document.getElementById('referral-btn'),
        finalAmountText: document.getElementById('final-amount-text'),
        paymentProofInput: document.getElementById('payment_proof'),
        originalAmountText: document.getElementById('original-amount-text'),
        registrationForm: document.getElementById('registration-form'),
    };

    const baseFee = 200000;
    const updatePaymentUI = (discountAmount) => { /* ... */ };
    const resetPaymentUI = () => updatePaymentUI(0);

    initReferralHandler({ ...DOM, baseFee, updatePaymentUI, resetPaymentUI });
    initFormHandler(DOM);
});