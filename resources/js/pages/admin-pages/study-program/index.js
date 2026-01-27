import DataTable from "datatables.net-dt";
import "datatables.net-responsive-dt";
import "datatables.net-dt/css/dataTables.dataTables.css";
import "datatables.net-responsive-dt/css/responsive.dataTables.css";
import Swal from "sweetalert2";

document.addEventListener("DOMContentLoaded", () => {
    new DataTable("#studyProgramTable", {
        pageLength: 10,
        lengthChange: false,
        ordering: true,
        responsive: true,
        language: {
            search: "",
            searchPlaceholder: "Cari program...",
            zeroRecords: "Data tidak ditemukan",
            info: "Menampilkan _START_ – _END_ dari _TOTAL_ data",
            infoEmpty: "Tidak ada data",
            paginate: {
                previous: "‹",
                next: "›",
            },
        },
        dom: `
            <"flex flex-col md:flex-row md:items-center md:justify-between mb-4"
                <"text-sm text-gray-600"i>
                f
            >
            t
            <"flex items-center justify-between mt-4"
                p
            >
        `,
    });

    const modal = document.getElementById("studyProgramModal");
    const form = document.getElementById("studyProgramForm");
    const createButton = document.querySelector("[data-study-program-create]");
    const editButtons = document.querySelectorAll("[data-study-program-edit]");
    const deleteButtons = document.querySelectorAll("[data-study-program-delete]");

    if (!modal || !form || !window.axios) {
        return;
    }

    const csrfToken = document.head.querySelector('meta[name="csrf-token"]')?.content;
    if (csrfToken) {
        window.axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;
    }

    const modalTitle = document.getElementById("studyProgramModalTitle");
    const modalSubtitle = document.getElementById("studyProgramModalSubtitle");
    const idInput = document.getElementById("studyProgramId");
    const nameInput = document.getElementById("studyProgramName");
    const gradeSelect = document.getElementById("studyProgramGrade");
    const submitButton = document.getElementById("studyProgramSubmitButton");
    const submitLabel = document.getElementById("studyProgramSubmitLabel");
    const submitSpinner = document.getElementById("studyProgramSubmitSpinner");
    const closeButtons = modal.querySelectorAll("[data-modal-close]");
    const errorBag = {
        name: modal.querySelector('[data-error="name"]'),
        grade: modal.querySelector('[data-error="grade"]'),
        general: modal.querySelector('[data-error="general"]'),
    };

    const swalBaseConfig = {
        confirmButtonColor: "#16a34a",
        cancelButtonColor: "#d33",
    };

    const showSuccess = async (title, text) => {
        await Swal.fire({
            icon: "success",
            title,
            text,
            timer: 1500,
            showConfirmButton: false,
            ...swalBaseConfig,
        });
    };

    const showError = async (title, text) => {
        await Swal.fire({
            icon: "error",
            title,
            text,
            ...swalBaseConfig,
        });
    };

    const getSubmitText = () =>
        (form.dataset.mode === "update" ? "Update" : "Simpan");

    const toggleErrors = (field, message = "") => {
        if (!errorBag[field]) return;
        if (message) {
            errorBag[field].textContent = message;
            errorBag[field].classList.remove("hidden");
        } else {
            errorBag[field].textContent = "";
            errorBag[field].classList.add("hidden");
        }
    };

    const clearErrors = () => {
        Object.keys(errorBag).forEach((field) => toggleErrors(field));
    };

    const toggleLoading = (isLoading) => {
        submitButton.disabled = isLoading;
        submitLabel.textContent = isLoading ? "Menyimpan..." : getSubmitText();
        submitSpinner.classList.toggle("hidden", !isLoading);
    };

    const setMode = (mode) => {
        form.dataset.mode = mode;
        if (mode === "create") {
            modalTitle.textContent = "Create Study Program";
            modalSubtitle.textContent = "Tambahkan program studi baru untuk ditampilkan di tabel.";
        } else {
            modalTitle.textContent = "Update Study Program";
            modalSubtitle.textContent = "Perbarui informasi program studi yang sudah ada.";
        }
        toggleLoading(false);
    };

    const resetForm = () => {
        form.reset();
        idInput.value = "";
        clearErrors();
    };

    const openModal = (mode, data = {}) => {
        resetForm();
        setMode(mode);

        if (mode === "update" && data) {
            idInput.value = data.id ?? "";
            nameInput.value = data.name ?? "";
            gradeSelect.value = data.grade ?? "";
        }

        modal.classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    };

    const closeModal = () => {
        modal.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    };

    createButton?.addEventListener("click", () => openModal("create"));

    editButtons.forEach((button) => {
        button.addEventListener("click", () => {
            openModal("update", {
                id: button.dataset.id,
                name: button.dataset.name,
                grade: button.dataset.grade,
            });
        });
    });

    deleteButtons.forEach((button) => {
        button.addEventListener("click", async () => {
            const { id, name } = button.dataset;
            const confirmResult = await Swal.fire({
                icon: "warning",
                title: "Hapus data?",
                text: `Program "${name || "ini"}" akan dihapus permanen.`,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                cancelButtonText: "Batal",
                reverseButtons: true,
                ...swalBaseConfig,
            });
            if (!confirmResult.isConfirmed) return;

            try {
                await window.axios.delete(`/admin/study-program/${id}`);
                await showSuccess("Terhapus", "Data berhasil dihapus.");
                window.location.reload();
            } catch (error) {
                const message =
                    error.response?.data?.meta?.message ||
                    error.response?.data?.message ||
                    "Gagal menghapus data. Coba lagi.";
                showError("Gagal", message);
            }
        });
    });

    closeButtons.forEach((button) => {
        button.addEventListener("click", closeModal);
    });

    modal.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && !modal.classList.contains("hidden")) {
            closeModal();
        }
    });

    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        clearErrors();
        toggleLoading(true);

        const mode = form.dataset.mode || "create";
        const payload = {
            name: nameInput.value.trim(),
            grade: gradeSelect.value,
        };

        const url =
            mode === "create"
                ? "/admin/study-program"
                : `/admin/study-program/${idInput.value}`;

        try {
            await window.axios({
                method: mode === "create" ? "post" : "put",
                url,
                data: payload,
            });

            closeModal();
            const successTitle = mode === "create" ? "Data ditambahkan" : "Data diperbarui";
            await showSuccess(successTitle, "Perubahan berhasil disimpan.");
            window.location.reload();
        } catch (error) {
            if (error.response?.status === 422 && error.response.data?.errors) {
                const { errors } = error.response.data;
                Object.keys(errors).forEach((field) => {
                    const message = Array.isArray(errors[field])
                        ? errors[field][0]
                        : errors[field];
                    toggleErrors(field, message);
                });
            } else {
                const message =
                    error.response?.data?.meta?.message ||
                    error.response?.data?.message ||
                    "Terjadi kesalahan. Coba lagi.";
                toggleErrors("general", message);
                showError("Gagal", message);
            }
        } finally {
            toggleLoading(false);
        }
    });
});
