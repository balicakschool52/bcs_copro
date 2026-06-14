import './bootstrap';
import { createIcons, icons } from 'lucide';
import Swal from 'sweetalert2';
window.Swal = Swal;

document.addEventListener('DOMContentLoaded', () => {
    createIcons({ icons });
});
