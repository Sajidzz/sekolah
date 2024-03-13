// Ambil elemen tombol toggle menu
const menuToggle = document.querySelector('.menu-toggle');

// Ambil elemen daftar menu responsif
const responsiveNavItems = document.querySelector('.responsive-nav-items');

// Ketika tombol toggle menu diklik
menuToggle.addEventListener('click', function() {
    // Toggle kelas 'active' pada daftar menu responsif
    responsiveNavItems.classList.toggle('active');
});
