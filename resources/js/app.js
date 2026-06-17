import './bootstrap';
import { createIcons, icons } from 'lucide';
import Swal from 'sweetalert2';
import './registration/init.js';
window.Swal = Swal;

document.addEventListener('DOMContentLoaded', () => {
    createIcons({ icons });
});
