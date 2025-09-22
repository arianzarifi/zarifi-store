<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود | ظریفی استور</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="auth-container">
    <div class="auth-box">
        <h2>ورود به حساب کاربری</h2>
        <form id="login-form" method="post">
            <div class="form-group">
                <label for="login-email">شماره موبایل</label>
                <input type="text"id="login-email"placeholder="شماره موبایل خود را وارد کنید">
                <div id="login-email-error" class="error-msg"></div>
            </div>

            <div class="form-group">
                <label for="login-password">رمز عبور</label>
                <input type="password"id="login-password"placeholder="رمز عبور">
                <div id="login-password-error" class="error-msg"></div>
            </div>

            <div class="form-group captcha-group">
                <div class="captcha-box">
                    <span id="login-captcha-box"></span>
                    <button type="button" id="login-refresh-captcha">↻</button>
                </div>
                <input type="text"  id="login-captcha-input"  placeholder="کد امنیتی">
                <div id="login-captcha-error" class="error-msg"></div>
            </div>

            <button type="submit" class="btn-submit">ورود</button>
            <p class="switch-text">
                حساب کاربری ندارید؟
                <a href="register.php">ثبت‌نام</a>
            </p>
        </form>
    </div>
</div>
<script src="assets/js/pages/login.js" defer></script>
</body>
</html>


