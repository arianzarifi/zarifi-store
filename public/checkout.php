<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارسال کالا|ظریفی استور</title>
    <link rel="stylesheet" href="assets/css/checkout.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
    <section class="checkout-container">

        <!-- فرم ادرس و مشخصات-->
       <form action="#" class="checkout-form">
           <h2>اطلاعات ارسال سفارش</h2>
           <label for="province">آدرس های شما</label>
              <select id="user-address" name="user-address" required>
                <option value="address-pesh">آدرس پیش فرض</option>
                
              </select>
           <div class="row">
               <div class="col form-group">
                   <label for="firstname" >نام</label>
                   <input type="text" name="firstname" id="firstname" required placeholder = "نام">
               </div>
               <div class="col form-group">
                <label for="firstname">نام خانوادگی</label>
                <input type="text" name="lastName" id="lastName" required placeholder = "نام خانوادگی">
               </div>
           </div>
           <div class="row">
            <div class="col form-group">
              <label for="province">استان</label>
              <select id="province" name="province" required>
                <option value="">انتخاب استان</option>
                <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                <option value="آذربایجان غربی">آذربایجان غربی</option>
                <option value="اردبیل">اردبیل</option>
                <option value="اصفهان">اصفهان</option>
                <option value="البرز">البرز</option>
                <option value="ایلام">ایلام</option>
                <option value="بوشهر">بوشهر</option>
                <option value="تهران">تهران</option>
                <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                <option value="خراسان جنوبی">خراسان جنوبی</option>
                <option value="خراسان رضوی">خراسان رضوی</option>
                <option value="خراسان شمالی">خراسان شمالی</option>
                <option value="خوزستان">خوزستان</option>
                <option value="زنجان">زنجان</option>
                <option value="سمنان">سمنان</option>
                <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                <option value="فارس">فارس</option>
                <option value="قزوین">قزوین</option>
                <option value="قم">قم</option>
                <option value="کردستان">کردستان</option>
                <option value="کرمان">کرمان</option>
                <option value="کرمانشاه">کرمانشاه</option>
                <option value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
                <option value="گلستان">گلستان</option>
                <option value="گیلان">گیلان</option>
                <option value="لرستان">لرستان</option>
                <option value="مازندران">مازندران</option>
                <option value="مرکزی">مرکزی</option>
                <option value="هرمزگان">هرمزگان</option>
                <option value="همدان">همدان</option>
                <option value="یزد">یزد</option>
                <!-- بقیه استان‌ها -->
              </select>
            </div>
      
            <div class="col form-group" >
              <label for="city">شهر</label>
              <select id="city" name="city" required>
                <option value="">ابتدا استان را انتخاب کنید</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="address" >آدرس دقیق</label>
            <textarea name="address" id="address" rows="5" required></textarea>
          </div>
          <div class="form-group row" >
            <label for="postal">شماره موبایل</label>
            <input type="tel" id="postal" name="postal" placeholder = "09xxxxxxxxx">
            <label for="postal">کد پستی</label>
            <input type="text" id="postal" name="postal" placeholder = "کد پستی">
          </div>
          <div class="form-group">
            <label for="note">توضیحات (اختیاری)</label>
            <textarea id="note" name="note" rows="4"></textarea>
          </div>

       </form>
         <!-- بخش خلاصه سفارش -->
         <div class="cart-summary">
          <h3>خلاصه سفارش</h3>
          <div class="summary-row">
            <span class="label">تعداد کالا</span>
            <span class="value">1</span>
          </div>
          <div class="summary-row">
            <span class="label">قیمت کالاها</span>
            <span class="value">150,000 تومان</span>
          </div>
    
          <div class="summary-row">
            <span class="label">هزینه ارسال</span>
            <span class="value">30,000 تومان</span>
          </div>
          <div class="summary-row">
            <span class="label">تخفیف</span>
            <span class="value">0 تومان</span>
          </div>
          
           
    
          <div class="summary-row total">
            <span class="label">مبلغ قابل پرداخت</span>
            <span class="value">180,000 تومان</span>
          </div>
    
          <button class="checkout-btn">ادامه فرایند خرید</button>
        </div>
      </section>
      <?php include 'includes/footer.php'; ?>
      <script src="assets/js/pages/checkout.js"></script>
</body>
</html>