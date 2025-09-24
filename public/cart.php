
<!DOCTYPE html>
<html lang="fa" dir = "rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید|ظریفی استور</title>
    <link rel="stylesheet" href="assets/css/cart.css">
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <div class="cart-container">
    <h1 class="title-cart">سبد خرید</h1>

    <div class="cart-content">
      
      <!-- سبد خرید -->
      <div class="cart-items">
  
        <div class="empty-cart">
          <img src="assets/images/cart_empty.png" alt="" class="img-cart">
          <p>سبد خرید شما خالی است</p>
          <p>برای مشاهده محصولات بیشتر به صفحه زیر بروید:</p>
          <div class="cartBtn">
            <a href="index.php">صفحه اصلی</a>
            <a href="#">محصولات</a>
          </div>
        </div>
      </div>
  
      <!-- خلاصه سفارش -->
      <div class="cart-summary">
        <h3>خلاصه سفارش</h3>
  
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
    </div>
  </div>
  
  
  <?php include 'includes/footer.php'; ?>
  

<script src = "assets/js/pages/cart.js"></script>
</body>
</html>