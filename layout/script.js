// document.addEventListener('DOMContentLoaded', function() {
//     const dropbtn = document.querySelector('.dropbtn');
//     const dropdownContent = document.querySelector('.dropdown-content');

//     if (dropbtn && dropdownContent) {
//         // Event listener untuk tombol dropdown
//         dropbtn.addEventListener('click', function(event) {
//             // Mencegah event 'click' ini memicu listener di 'window'
//             event.stopPropagation(); 
//             // Menampilkan atau menyembunyikan dropdown
//             dropdownContent.classList.toggle('show');
//         });

//         // Menutup dropdown jika pengguna mengklik di luar area dropdown
//         window.addEventListener('click', function(event) {
//             if (dropdownContent.classList.contains('show')) {
//                 dropdownContent.classList.remove('show');
//             }
//         });
//     }
// });