<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>صفحه محصول</title>
</head>
<link rel="stylesheet" href="assets/css/product.css">
<body>
<?php include 'includes/header.php'; ?> 

<div class="product-page">
  <!-- بخش عکس‌ها -->
  <div class="product-images">
    <img id="main-image" src="assets/images/img1.webp" alt="محصول">
    <div class="thumbnails">
      <img src="assets/images/img2.webp" onclick="changeImage(this)">
      <img src="assets/images/img3.webp" onclick="changeImage(this)">
      <img src="assets/images/img4.webp" onclick="changeImage(this)">
      <img src="assets/images/img5.webp" onclick="changeImage(this)">
    </div>
  </div>

  <!-- بخش مشخصات -->
  <div class="product-details">
    <h1>جاروبرقی کیسه‌‎دار دوو مدل DVC-LH22R</h1>
    <hr>
    <p class="price">8,877,100
         <span class="currency">تومان</span>
    </p>


    <p>
    فیلتر HEPA 13، وزن 10 کیلوگرم، دارای سه عدد سری مجزا، کنترل روی دسته، موتور با توان مکش 650 وات، میزان صدا 70 دسی‌بل، طول کابل برق 8 متر، گنجایش مخزن 4.5 لیتر، دارای کیسه یکبار مصرف، دارای لوله تلسکوپی قابل تنظیم
    </p>
    <!-- <ul>
      <li>رنگ: مشکی</li>
      <li>سایز: 42</li>
      <li>وزن: 750 گرم</li>
      <li>جنس: پارچه‌ای</li>
    </ul> -->
    <hr>
    <p id="stock-message">تعداد 3 در انبار باقی مانده است</p>
  </div>

  <!-- بخش خرید -->
  <div class="product-purchase">
  <!-- قیمت واحد -->

 

  <!-- انتخاب تعداد -->
<div class="quantity-wrapper">
  <div class="quantity-decrease">-</div>
  <input type="text" value="1">
  <div class="quantity-increase">+</div>
</div>


  <!-- قیمت کل -->
  <div class="price-details">
  <div class="price-row">
    <span>قیمت کل:</span>
    <span>8,877,100 تومان</span>
  </div>
  <div class="price-row">
    <span>مالیات:</span>
    <span>0 تومان</span>
  </div>
  <div class="price-row">
    <span>قابل پرداخت:</span>
    <span>8,877,100 تومان</span>
  </div>
</div>


  <!-- افزودن به سبد خرید -->
  <button class = "add-to-cart" onclick="addToCart()">افزودن به سبد خرید</button>

</div>
</div>
<div class = "product-info-wrapper">
  <div class="product-info">
  <div class="info-item">ارسال رایگان خرید بالای 10 میلیون تومان</div>
  <div class="info-item">تضمین کیفیت</div>
  <div class="info-item">امکان پرداخت درب منزل</div>
  <div class="info-item">ضمانت 7 روز بازگشت کالا</div>
</div>
</div>
<div class = "product-tabs">
  <div class = "tab-buttons">
    <button class = "tab-btn active" data-tab="description">توضیح تکمیلی</button>
    <button class = "tab-btn " data-tab="specs">مشخصات</button>
    <button class = "tab-btn" data-tab="reviews">نظرات</button>
  </div>
  <div class = "tab-content">
    <div class = "tab-panel" id = "description">
      <p>
      جاروبرقی دوو مدل DVC-LH22R یک وسیله برقی است که برای تمیز کردن محیط‌های مختلف
       استفاده می‌شود. این جاروبرقی دارای ظرفیت ۵ لیتری برای جمع‌آوری گرد و غبار است که این امکان را به کاربر می‌دهد تا بدون نیاز به تخلیه مکرر آن را استفاده کند. همچنین، این جاروبرقی دارای سیم برق ۸ متری است که این ویژگی به کاربر اجازه می‌دهد تا به راحتی در محیط‌های مختلف از آن استفاده کند بدون نیاز به تغییر مکان پریز برق. قدرت مکش این جاروبرقی ۶۵۰ وات است که این مقدار قدرت مکش بالا به کاربر امکان می‌دهد تا حتی از ذرات‌ریز و بزرگ گرد و غبار را به راحتی جمع‌آوری کند. موتور این جاروبرقی دارای قدرت ۲۱۰۰ وات است که
        این قدرت بالا به جاروبرقی امکان می‌دهد تا به صورت مداوم و بدون وقفه کار کند و از کارایی بالایی برخوردار باشد جاروبرقی DVC-LH22R یکی از محصولات با کیفیت و عمل‌کرد بالای شرکت دوو است. این جاروبرقی دارای ویژگی‌هایی از قبیل جابجایی آسان و کم‌صدا بودن است که آن را به یک گزینه عالی برای نظافت منازل و محیط‌های مختلف تبدیل کرده است. این جاروبرقی دارای توان مکش ۶۵۰ وات و توان موتور ۲۱۰۰ وات است. همچنین دارای ظرفیت ۵ لیتر و طول کابل برق ۸ متر است. با
         این ویژگی‌ها، DVC-LH22R به راحتی می‌تواند با ذرات آلودگی مختلف و حتی با مواد 
      سخت‌تر مانند موهای حیوانات خانگی مقابله کند. این جاروبرقی ابعادی به اندازه ۳۹۰x۵۶۰x۳۲۰ میلی‌متر دارد و وزن آن هم بسیار سبک است که این امر نشان از قابلیت جابجایی و حمل آسان آن دارد. از سوی دیگر، سطح صدای عمل‌کرد این جاروبرقی هم مورد توجه قرار گرفته است و به نظر می‌رسد که میزان صدای آن در حدود ۷۰ دسی‌بل (decibel) است که برای مشتریان بسیار مهم است. مشتریان به دنبال کاهش سطح نویز و صدای عمل‌کرد جاروبرقی هستند و این موضوع برای آن‌ها اهمیت بسیاری دارد. بهبود عمل‌کرد و کاهش سطح نویز موتورهای جاروبرقی، نقش مهمی در انتخاب و خرید آنلاین محصولات دارد و برای تولیدکنندگان این محصولات، اهمیت ویژه‌ای دارد تا نیازهای مشتریان را برآورده سازند و بازار خود را تقویت کنند. با توجه به معرفی و بررسی ویژگی‌های جاروبرقی DVC-LH22R، می‌توان نتیجه گرفت که این محصول با قدرت مکش بالا، صدای کمتر، و طول کابل برق مناسب، یکی از بهترین گزینه‌ها برای نظافت منزل و محیط‌های مختلف است.
      </p>
    </div>
    <div class="tab-panel" id="specs">
      <ul>
        <li>نوع جارو برقی:کیسه دار</li>
        <li>تعداد سری: سه عدد</li>
        <li>طول کابل برق:8 متر</li>
        <li>میزان صدا:70 دسی بل</li>
      </ul>
    </div>
    <div class="tab-panel" id="reviews">
      <p>هنوز نظری ثبت نشده است</p>
    </div>
  </div>
</div>


<?php include 'includes/footer.php'; ?> 
<script src="assets/js/pages/product.js"></script>
</body>
</html>
