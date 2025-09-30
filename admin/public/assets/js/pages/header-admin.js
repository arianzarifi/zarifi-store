// فایل header-admin.js
document.addEventListener("DOMContentLoaded", () => {
  const avatar = document.getElementById('avatar');
  const dropdownMenu = document.getElementById('dropdownMenu');
  const clock = document.getElementById('clock');

  // ساعت زنده
  function updateClock() {
    let now = new Date();
    clock.textContent = now.toLocaleTimeString('fa-IR');
  }
  setInterval(updateClock, 1000);
  updateClock();

  // منوی پروفایل
  avatar.addEventListener('click', () => {
    dropdownMenu.style.display = dropdownMenu.style.display==='block' ? 'none' : 'block';
  });

  window.addEventListener('click', e => {
    if(!avatar.contains(e.target)) dropdownMenu.style.display='none';
  });
});

