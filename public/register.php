<?php 
session-start() ;
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام | ظریفی استور</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-box">
            <h2>ثبت نام در سایت</h2>
            <form id="register-form">
                <div class="form-group">
                    <label for="register-email">شماره موبایل</label>
                    <input type="text" id="register-email" placeholder="شماره موبایل خود را وارد کنید">
                    <span class="error" id="register-email-error"></span>
                </div>
                <div class="form-group">
                    <label for="register-password">رمز عبور</label>
                    <input type="password" id="register-password" placeholder="رمز عبور">
                    <span class="error" id="register-password-error"></span>
                </div>
                <div class="form-group">
                    <label for="register-confirm-password">تکرار رمز عبور</label>
                    <input type="password" id="register-confirm-password" placeholder="رمز عبور را دوباره وارد کنید">
                    <span class="error" id="register-confirm-error"></span>
                </div>
                <div class="form-group captcha-group">
                    <div class="captcha-box">
                        <span id="register-captcha-box"></span>
                        <button type="button" id="register-refresh-captcha">↻</button>
                    </div>
                    <input type="text" id="register-captcha-input" placeholder="کد امنیتی">
                    <span class="error" id="register-captcha-error"></span>
                </div>
                <button type="button" class="btn-submit" id="register-btn">ثبت نام</button>
                <p class="switch-text">حساب کاربری دارید؟ <a href="login.php">ورود</a></p>
            </form>
        </div>
    </div>
    <script src="assets/js/pages/register.js"></script>
</body>
</html>
