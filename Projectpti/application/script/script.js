const menuToggle = document.querySelector('.halaman-utama .navbar .menu-toggle input');
const nav = document.querySelector('.halaman-utama .navbar .nav-link ul');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide'); 
});