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
    <h1>کفش ورزشی مردانه</h1>
    <hr>
    <p class="price">450,000
         <span class="currency">تومان</span>
    </p>


    <p>
      این کفش ورزشی دارای طراحی مدرن، کیفیت عالی و مناسب برای پیاده‌روی و دویدن است.
    </p>
    <ul>
      <li>رنگ: مشکی</li>
      <li>سایز: 42</li>
      <li>وزن: 750 گرم</li>
      <li>جنس: پارچه‌ای</li>
    </ul>
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
    <span>450,000 تومان</span>
  </div>
  <div class="price-row">
    <span>مالیات</span>
    <span>0 تومان</span>
  </div>
  <div class="price-row">
    <span>قابل پرداخت</span>
    <span>450,000 تومان</span>
  </div>
</div>


  <!-- افزودن به سبد خرید -->
  <button class = "add-to-cart">افزودن به سبد خرید</button>
</div>
</div>
<div class = "Warranty description">
  <div class></div>
</div>
<?php include 'includes/footer.php'; ?> 
<script>
  function changeImage(thumbnail) {
    document.getElementById('main-image').src = thumbnail.src;
  }

  function addToCart() {
    alert("محصول به سبد خرید اضافه شد!");
  }
</script>
</body>
</html>
