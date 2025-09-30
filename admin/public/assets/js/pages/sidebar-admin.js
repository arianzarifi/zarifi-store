// فایل sidebar-admin.js
document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.getElementById('sidebar');
  const hamburger = document.getElementById('hamburger');

  // همبرگر: باز و بسته شدن سایدبار
  hamburger.addEventListener('click', () => {
    sidebar.classList.toggle('hidden');
  });
});

// زیرمنوهای سایدبار
function toggleSubmenu(element){
  element.classList.toggle("active"); // نمایش زیرمنو
}
