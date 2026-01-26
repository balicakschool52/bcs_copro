import DataTable from "datatables.net-dt";
import "datatables.net-responsive-dt";
import "datatables.net-dt/css/dataTables.dataTables.css";
import "datatables.net-responsive-dt/css/responsive.dataTables.css";

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
});
