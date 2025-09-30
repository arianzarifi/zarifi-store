// تغییر نقش کاربر
document.querySelectorAll('.role-select').forEach(select => {
    select.addEventListener('change', e => {
        const newRole = e.target.value;
        const row = e.target.closest('tr');
        row.style.backgroundColor = '';

        if(newRole === 'admin'){
            row.style.backgroundColor = '#fff3e0'; // رنگ خاص برای مدیر
        } else if(newRole === 'seller'){
            row.style.backgroundColor = '#e3f2fd'; // رنگ خاص برای فروشنده
        } else {
            row.style.backgroundColor = '#f9f9f9'; // رنگ پیش‌فرض برای کاربر عادی
        }
    });
});
