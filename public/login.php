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
            <form id="login-form">
                <div class="form-group">
                    <label for="login-email">شماره موبایل</label>
                    <input type="text" id="login-email" placeholder="شماره موبایل خود را وارد کنید">
                    <span class="error" id="login-email-error"></span>
                </div>
                <div class="form-group">
                    <label for="login-password">رمز عبور</label>
                    <input type="password" id="login-password" placeholder="رمز عبور">
                    <span class="error" id="login-password-error"></span>
                </div>
                <div class="form-group captcha-group">
                    <div class="captcha-box">
                        <span id="login-captcha-box"></span>
                        <button type="button" id="login-refresh-captcha">↻</button>
                    </div>
                    <input type="text" id="login-captcha-input" placeholder="کد امنیتی">
                    <span class="error" id="login-captcha-error"></span>
                </div>
                <button type="submit" class="btn-submit">ورود</button>
                <p class="switch-text">حساب کاربری ندارید؟ <a href="register.php">ثبت نام</a></p>
            </form>
        </div>
    </div>
    <script src="assets/js/pages/login.js"></script>
</body>
</html>

