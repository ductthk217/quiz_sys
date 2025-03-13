import './bootstrap';
import 'laravel-datatables-vite';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Sweetalert2
import Swal from 'sweetalert2';
window.Swal = Swal;
