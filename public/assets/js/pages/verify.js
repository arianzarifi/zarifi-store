document.addEventListener('DOMContentLoaded', () => {
    // دریافت شماره از URL
    const params = new URLSearchParams(window.location.search);
    const phone = params.get('phone');
    document.getElementById('phone-display').textContent = phone ? phone : 'شماره نامشخص';

    // تایمر
    let timer = null ;
    let timeLeft = 120;
    const timerEl = document.getElementById('timer');
    const resendBtn = document.getElementById('resend-btn');

    function startTimer() {
        if(timer){
            clearInterval(timer) ;
        }
        resendBtn.disabled = true;
        resendBtn.classList.remove('active');

         timer = setInterval(() => {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            if (seconds < 10) seconds = '0' + seconds;
            timerEl.textContent = `${minutes}:${seconds}`;
            timeLeft--;

            if (timeLeft < 0) {
                clearInterval(timer);
                resendBtn.disabled = false;
                resendBtn.classList.add('active');
            }
        }, 1000);
    }

    startTimer();

    // ارسال مجدد
    resendBtn.addEventListener('click', () => {
        alert('کد جدید ارسال شد! (در آینده از بک‌اند)');
        timeLeft = 120;
        startTimer();
    });

    // اعتبارسنجی
    const verifyForm = document.getElementById('verify-form');
    const codeInput = document.getElementById('verification-code');
    const errorMsg = document.getElementById('code-error');

    verifyForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const code = codeInput.value.trim();

        if (code.length !== 6 || isNaN(code)) {
            errorMsg.textContent = 'کد باید ۶ رقم عددی باشد';
        } else {
            errorMsg.textContent = '';
            alert('کد تأیید شد! (در آینده به بک‌اند متصل می‌شود)');
            // اینجا می‌تونی به داشبورد ببری
        }
    });
});
