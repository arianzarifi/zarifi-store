document.addEventListener('DOMContentLoaded' , () => {
  const provinceSelect  = document.getElementById('province') ;
  const citySelect  = document.getElementById('city') ;
  const checkoutForm = document.querySelector('.checkout-form');
  const btnCheckout = document.querySelector('.checkout-btn');

  // فیلدها
  const firstName = document.getElementById('firstname');
  const lastName = document.getElementById('lastName');
  const province = document.getElementById('province');
  const city = document.getElementById('city');
  const address = document.getElementById('address');
  const phone = document.getElementById('phone');   // موبایل جدید
  const postal = document.getElementById('postal');
    const provinceCities  = {
        "آذربایجان شرقی": ["تبریز", "مراغه", "مرند", "میانه", "اهر", "جلفا", "سراب", "شبستر", "کلیبر", "عجب‌شیر", "ورزقان", "بناب", "بستان‌آباد", "آذرشهر", "آبش احمد", "هادی‌شهر", "هریس", "هشترود"],
        "آذربایجان غربی": ["ارومیه", "خوی", "ماکو", "میاندوآب", "سلماس", "پیرانشهر", "بوکان", "شاهین‌دژ", "تکاب", "سردشت", "نقده"],
        "اردبیل": ["اردبیل", "خلخال", "مشگین‌شهر", "بیله‌سوار", "نمین", "نیر", "پارس‌آباد", "سرعین", "کوثر"],
        "اصفهان": ["اصفهان", "کاشان", "نجف‌آباد", "شاهین‌شهر", "خمینی‌شهر", "فریدن", "فریدون‌شهر", "گلپایگان", "لنجان", "مبارکه", "نطنز", "نایین", "سمیرم"],
        "البرز": ["کرج", "هشتگرد", "نظرآباد", "اشتهارد", "طالقان", "فردیس"],
        "ایلام": ["ایلام", "آبدانان", "دهلران", "مهران", "چوار", "بدره", "موسیان", "هلیلان"],
        "بوشهر": ["بوشهر", "گناوه", "دیر", "کنگان", "جم", "عسلویه"],
        "تهران": ["تهران", "شهریار", "اسلامشهر", "ری", "پاکدشت", "فیروزکوه", "دماوند", "ورامین", "رباط‌کریم", "شمیرانات", "ملارد", "پیشوا", "قرچک"],
        "چهارمحال و بختیاری": ["شهرکرد", "بروجن", "فارسان", "لردگان", "کوهرنگ", "اردل", "بن", "کیار", "سامان"],
        "خراسان جنوبی": ["بیرجند", "قائن", "طبس", "نهبندان", "فردوس", "سربیشه", "درمیان", "سرایان"],
        "خراسان رضوی": ["مشهد", "نیشابور", "تربت‌جام", "سبزوار", "قوچان", "چناران", "درگز", "خواف", "سرخس", "تربت‌حیدریه"],
        "خراسان شمالی": ["بجنورد", "شیروان", "اسفراین", "جاجرم", "گرمه", "مانه‌وسملقان"],
        "خوزستان": ["اهواز", "آبادان", "خرمشهر", "دزفول", "شادگان", "بهبهان", "آغاجاری", "ماهشهر", "هندیجان", "سوسنگرد"],
        "زنجان": ["زنجان", "خرمدره", "ابهر", "خدابنده", "ماه‌نشان", "طارم", "ایجرود"],
        "سمنان": ["سمنان", "شاهرود", "دامغان", "مهدی‌شهر", "گرمسار", "سرخه", "میامی", "ایوانکی"],
        "سیستان و بلوچستان": ["زاهدان", "چابهار", "زابل", "کنارک", "ایرانشهر", "خاش", "نیک‌شهر", "سرباز", "میرجاوه"],
        "فارس": ["شیراز", "مرودشت", "داراب", "کازرون", "مرودشت", "فسا", "جهرم", "استهبان", "فراشبند", "قیروکارزین", "لامرد"],
        "قزوین": ["قزوین", "بوئین‌زهرا", "آبیک", "تاکستان", "البرز", "الوند"],
        "قم": ["قم"],
        "کردستان": ["سنندج", "قروه", "بیجار", "سقز", "دیواندره", "کامیاران", "بانه", "مریوان"],
        "کرمان": ["کرمان", "رفسنجان", "راور", "انار", "سیرجان", "جیرفت", "بم", "زرند", "شهربابک", "رابر"],
        "کرمانشاه": ["کرمانشاه", "اسلام‌آباد غرب", "صحنه", "سرپل ذهاب", "نودشه", "ثلاث باباجانی", "کنگاور", "قصرشیرین", "پاوه", "سنقر"],
        "کهگیلویه و بویراحمد": ["یاسوج", "دنا", "گچساران", "بهمئی", "باشت", "چرام", "کهگیلویه"],
        "گلستان": ["گرگان", "گنبد کاووس", "آق‌قلا", "علی‌آباد", "مینودشت", "رامیان", "کردکوی", "کلاله", "بندرترکمن", "آزادشهر"],
        "گیلان": ["رشت", "انزلی", "لاهیجان", "آستارا", "صومعه‌سرا", "رودسر", "تالش", "فومن", "ماسال", "لنگرود"],
        "لرستان": ["خرم‌آباد", "کوهدشت", "دورود", "پلدختر", "الشتر", "الیگودرز", "ازنا"],
        "مازندران": ["ساری", "آمل", "بابل", "نکا", "نور", "قائم‌شهر", "چالوس", "تنکابن", "رامسر", "بهشهر", "بابلسر", "فریدونکنار"],
        "مرکزی": ["اراک", "ساوه", "خمین", "محلات", "کمیجان", "دلیجان", "تفرش", "زرندیه"],
        "هرمزگان": ["بندرعباس", "قشم", "بندرلنگه", "میناب", "ابوموسی", "بستک", "بستک", "حاجی‌آباد", "بشاگرد"],
        "همدان": ["همدان", "ملایر", "نهاوند", "کبودراهنگ", "بهار", "اسدآباد", "رزن", "فامنین"],
        "یزد": ["یزد", "میبد", "اردکان", "بافق", "مهریز", "ابرکوه", "تفت", "خاتم"]
      };
      provinceSelect.addEventListener('change', () => {
        const selectedProvince = provinceSelect.value;
        citySelect.innerHTML = '<option value="">انتخاب شهر</option>';
        if (selectedProvince && provinceCities[selectedProvince]) {
            provinceCities[selectedProvince].forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });
        }
    });

    // مدیریت خطا
    function showError(input, message) {
        let errorElem = input.parentElement.querySelector('.error-msg');
        if (errorElem) errorElem.textContent = message;
    }
    function clearError(input) {
        let errorElem = input.parentElement.querySelector('.error-msg');
        if (errorElem) errorElem.textContent = '';
    }

    function validateForm() {
        let isValid = true;
        [firstName, lastName, province, city, address, phone, postal].forEach(f => clearError(f));

        if (!firstName.value.trim()) { showError(firstName, 'نام الزامی است'); isValid=false; }
        if (!lastName.value.trim()) { showError(lastName, 'نام خانوادگی الزامی است'); isValid=false; }
        if (!province.value.trim()) { showError(province, 'استان الزامی است'); isValid=false; }
        if (!city.value.trim()) { showError(city, 'شهر الزامی است'); isValid=false; }
        if (!address.value.trim()) { showError(address, 'آدرس الزامی است'); isValid=false; }
        if (!/^09\d{9}$/.test(phone.value.trim())) { showError(phone, 'شماره موبایل معتبر وارد کنید'); isValid=false; }
        if (postal.value.trim() && !/^\d{10}$/.test(postal.value.trim())) {
            showError(postal, 'کد پستی باید ۱۰ رقم باشد'); isValid=false;
        }
        if(!postal.value.trim()){showError(postal , "کد پستی الزامی است"); isValid=false;} 
        if(/^(\d)\1{9}$/.test(postal.value.trim())){
          showError(postal , "کد پستی نمیتواند همه ارقام یکسان باشد");isValid=false;
        }
        if(/^0/.test(postal.value.trim())){
          showError(postal , "کد پستی نباید با صفر شروع شود");isValid=false;
        }

        return isValid;
    }

    btnCheckout.addEventListener('click', () => {
        if (validateForm()) {
            console.log('فرم معتبره فر.شگاه دیجیکالا بزرگه به نظرم برای این فروشگاه در این حد لازم نیست ');
            checkoutForm.submit();
        }
    });
    });