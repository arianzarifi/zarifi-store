// تولید کپچا تصادفی
function generateCaptcha() {
    const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
    let captcha = '';
    for (let i = 0; i < 5; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return captcha;
}

const loginCaptchaBox = document.getElementById('login-captcha-box');
const loginCaptchaInput = document.getElementById('login-captcha-input');
let loginCaptcha = generateCaptcha();
loginCaptchaBox.textContent = loginCaptcha;

// رفرش کپچا
document.getElementById('login-refresh-captcha').addEventListener('click', () => {
    loginCaptcha = generateCaptcha();
    loginCaptchaBox.textContent = loginCaptcha;
    loginCaptchaInput.value = '';
});

// اعتبارسنجی ایمیل
function validatePhoneNumber(phone) {
    // حذف فاصله‌ها و خط فاصله‌ها
    phone = phone.replace(/\s|-/g, '');

    // شماره موبایل ایرانی باید با 09 شروع شود و 11 رقم باشد
    const re = /^09\d{9}$/;
    return re.test(phone);
}

// مثال استفاده
const phoneInput = document.getElementById('login-email');
const errorMsg = document.getElementById('login-email-error');

phoneInput.addEventListener('input', () => {
    const phone = phoneInput.value.trim();
    if (!phone) {
        errorMsg.textContent = "وارد کردن شماره موبایل الزامی است";
    } else if (!validatePhoneNumber(phone)) {
        errorMsg.textContent = "شماره موبایل وارد شده معتبر نیست";
    } else {
        errorMsg.textContent = "";
    }
});


// فرم لاگین
const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // پاک کردن خطاهای قبلی
    document.getElementById('login-email-error').textContent = '';
    document.getElementById('login-password-error').textContent = '';
    document.getElementById('login-captcha-error').textContent = '';

    let valid = true;

    
    const password = document.getElementById('login-password').value.trim();
    const captchaInput = loginCaptchaInput.value.trim();

   

    if (!password) {
        document.getElementById('login-password-error').textContent = 'وارد کردن رمز عبور الزامی است';
        valid = false;
    }

    if (!captchaInput) {
        document.getElementById('login-captcha-error').textContent = 'کد امنیتی را وارد کنید';
        valid = false;
    } else if (captchaInput.toUpperCase() !== loginCaptcha) {
        document.getElementById('login-captcha-error').textContent = 'کد امنیتی صحیح نیست';
        valid = false;
    }

    if (valid) {
        alert('فرم لاگین با موفقیت ارسال شد! (در آینده به بک‌اند متصل می‌شود)');
        loginForm.reset();
        loginCaptcha = generateCaptcha();
        loginCaptchaBox.textContent = loginCaptcha;
    }
});
