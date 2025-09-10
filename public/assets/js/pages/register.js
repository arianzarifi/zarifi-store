// تولید کپچا تصادفی
function generateCaptcha() {
    const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
    let captcha = '';
    for (let i = 0; i < 5; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return captcha;
}

const registerCaptchaBox = document.getElementById('register-captcha-box');
const registerCaptchaInput = document.getElementById('register-captcha-input');
let registerCaptcha = generateCaptcha();
registerCaptchaBox.textContent = registerCaptcha;

// رفرش کپچا
document.getElementById('register-refresh-captcha').addEventListener('click', () => {
    registerCaptcha = generateCaptcha();
    registerCaptchaBox.textContent = registerCaptcha;
    registerCaptchaInput.value = '';
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
const phoneInput = document.getElementById('register-email');
const errorMsg = document.getElementById('register-email-error');

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
// فرم ثبت نام
const registerForm = document.getElementById('register-form');

registerForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // پاک کردن خطاهای قبلی
    document.getElementById('register-email-error').textContent = '';
    document.getElementById('register-password-error').textContent = '';
    document.getElementById('register-confirm-error').textContent = '';
    document.getElementById('register-captcha-error').textContent = '';

    let valid = true;

    const email = document.getElementById('register-email').value.trim();
    const password = document.getElementById('register-password').value.trim();
    const confirmPassword = document.getElementById('register-confirm-password').value.trim();
    const captchaInput = registerCaptchaInput.value.trim();


    if (!password) {
        document.getElementById('register-password-error').textContent = 'وارد کردن رمز عبور الزامی است';
        valid = false;
    }

    if (!confirmPassword) {
        document.getElementById('register-confirm-error').textContent = 'تکرار رمز عبور الزامی است';
        valid = false;
    } else if (password !== confirmPassword) {
        document.getElementById('register-confirm-error').textContent = 'رمزها مطابقت ندارند';
        valid = false;
    }

    if (!captchaInput) {
        document.getElementById('register-captcha-error').textContent = 'کد امنیتی را وارد کنید';
        valid = false;
    } else if (captchaInput.toUpperCase() !== registerCaptcha) {
        document.getElementById('register-captcha-error').textContent = 'کد امنیتی صحیح نیست';
        valid = false;
    }

    if (valid) {
        alert('ثبت نام موفقیت‌آمیز بود! (در آینده به بک‌اند متصل می‌شود)');
        registerForm.reset();
        registerCaptcha = generateCaptcha();
        registerCaptchaBox.textContent = registerCaptcha;
    }
});
document.getElementById('register-btn').addEventListener('click', function (e) {
    e.preventDefault(); // جلوگیری از رفرش
    const phone = document.getElementById('register-email').value.trim();
    
    if (phone) {
        // انتقال به صفحه verify.html و ارسال شماره موبایل
        window.location.href = `verify.php?phone=${encodeURIComponent(phone)}`;
    } else {
        alert('لطفاً شماره موبایل را وارد کنید');
    }
});
const params = new URLSearchParams(window.location.search);
const phone = params.get('phone');
document.getElementById('phone-display').textContent = phone ? phone : 'شماره نامشخص';