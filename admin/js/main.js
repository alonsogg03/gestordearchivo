document.addEventListener('DOMContentLoaded', function () {
    const menuOpenButton = document.getElementById('menu-open');
    const menuCloseButton = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const modalBg = document.getElementById('modal-bg');
  
    menuOpenButton.addEventListener('click', function () {
      mobileMenu.classList.remove('hidden');
      modalBg.classList.remove('hidden');
    });
  
    menuCloseButton.addEventListener('click', function () {
      mobileMenu.classList.add('hidden');
      modalBg.classList.add('hidden');
    });
  
    modalBg.addEventListener('click', function () {
      mobileMenu.classList.add('hidden');
      modalBg.classList.add('hidden');
    });
  });

//movimiento de navbar
  document.getElementById('dropdownUserAvatarButton').addEventListener('click', function() {
    var dropdown = document.getElementById('dropdownAvatar');
    dropdown.classList.toggle('hidden');
});

// Optional: Close the dropdown when clicking outside of it
window.addEventListener('click', function(event) {
    var dropdownButton = document.getElementById('dropdownUserAvatarButton');
    var dropdown = document.getElementById('dropdownAvatar');
    if (!dropdownButton.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});



