// گرفتن المان‌ها
const avatar = document.getElementById('user-avatar');
const userMenu = document.getElementById('user-menu');
const logoutBtn = document.getElementById('logout-btn');
// تغییر وضعیت نمایش منو هنگام کلیک روی آواتار
avatar.addEventListener('click', () => {
    userMenu.style.display = userMenu.style.display === 'block' ? 'none' : 'block';
});
logoutBtn.addEventListener('click', () => {
    window.location.href = 'index.php';
});

