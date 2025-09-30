
  const form = document.getElementById('phoneForm');

  form.addEventListener('submit', e => {
    e.preventDefault();

    const phone1 = document.getElementById('store-phone-1').value.trim();
    const phone2 = document.getElementById('store-phone-2').value.trim();

    // تابع برای بررسی فقط عدد بودن
    function isValidNumber(str) {
      return /^[0-9]+$/.test(str);
    }

    if (phone1 && !isValidNumber(phone1)) {
      alert('شماره 1 فقط می‌تواند شامل اعداد باشد');
      return;
    }
    if (phone2 && !isValidNumber(phone2)) {
      alert('شماره 2 فقط می‌تواند شامل اعداد باشد');
      return;
    }

    // فقط برای تست فرانت‌اند
    console.log('شماره 1:', phone1);
    console.log('شماره 2:', phone2);

    alert('تغییرات ثبت شد (فرانت‌اند)');
    form.reset(); // پاک کردن فیلدها بعد از submit
  });

