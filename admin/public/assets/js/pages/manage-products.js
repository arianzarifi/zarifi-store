// وقتی وضعیت سفارش تغییر کنه، سفارش از جدول حذف بشه (آماده برای بک‌اند)
document.querySelectorAll('.status-select').forEach(select => {
    select.addEventListener('change', e => {
        const row = e.target.closest('tr');
        if(e.target.value !== 'new'){
            // سفارش از "سفارش‌های جدید" حذف می‌شود
            row.remove();
        }
    });
});
