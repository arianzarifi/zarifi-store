document.addEventListener('DOMContentLoaded', () => {
    // تمام کد JS تو اینجا قرار می‌گیرد

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

    document.getElementById('login-refresh-captcha').addEventListener('click', () => {
        loginCaptcha = generateCaptcha();
        loginCaptchaBox.textContent = loginCaptcha;
        loginCaptchaInput.value = '';
    });

    // اعتبارسنجی شماره موبایل
    function validatePhoneNumber(phone) {
        phone = phone.replace(/\s|-/g, '');
        const re = /^09\d{9}$/;
        return re.test(phone);
    }

    const phoneInput = document.getElementById('login-email');
    const passwordInput = document.getElementById('login-password');
    const loginForm = document.getElementById('login-form');

    const phoneError = document.getElementById('login-email-error');
    const passwordError = document.getElementById('login-password-error');
    const captchaError = document.getElementById('login-captcha-error');

    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // پاک کردن خطاهای قبلی
        phoneError.textContent = '';
        passwordError.textContent = '';
        captchaError.textContent = '';

        let valid = true;

        const phone = phoneInput.value.trim();
        const password = passwordInput.value.trim();
        const captchaValue = loginCaptchaInput.value.trim();

        // اعتبارسنجی شماره موبایل
        if (!phone) {
            phoneError.textContent = 'وارد کردن شماره موبایل الزامی است';
            valid = false;
        } else if (!validatePhoneNumber(phone)) {
            phoneError.textContent = 'شماره موبایل وارد شده معتبر نیست';
            valid = false;
        }

        // اعتبارسنجی رمز
        if (!password) {
            passwordError.textContent = 'وارد کردن رمز عبور الزامی است';
            valid = false;
        }

        // اعتبارسنجی کپچا
        if (!captchaValue) {
            captchaError.textContent = 'کد امنیتی را وارد کنید';
            valid = false;
        } else if (captchaValue.toUpperCase() !== loginCaptcha) {
            captchaError.textContent = 'کد امنیتی صحیح نیست';
            valid = false;
        }

        if (valid) {
            
            const mobileEncoded = encodeURIComponent(phone);
            window.location.href = `dashboard.php?user=${mobileEncoded}`;
        }
    });
});
