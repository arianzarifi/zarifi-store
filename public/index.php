<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی | ظریفی استور</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?> 
    
<div class="header-foot">
            <div class="slider">
                <div class="slides">
                  <div class="slide active">
                    <a href="#"><img src="assets/images/slid1.jpg" alt="محصول ۱"></a>
                    <!-- <div class="slide-caption">عنوان محصول ۱</div> -->
                  </div>
                  <div class="slide">
                    <a href="#"><img src="assets/images/slide2.jpg" alt="محصول ۲"></a>
                    <!-- <div class="slide-caption">عنوان محصول ۲</div> -->
                  </div>
                  <!-- <div class="slide">
                    <img src="assets/images/slide3.jpg" alt="محصول ۳">
                    <div class="slide-caption">عنوان محصول ۳</div>
                  </div> -->
                </div>
              
                <!-- دکمه‌های ناوبری -->
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
              
                <!-- نقاط ناوبری -->
                <div class="dots">
                  <span class="dot active" data-index="0"></span>
                  <span class="dot" data-index="1"></span>
                  <!-- <span class="dot" data-index="2"></span> -->
                </div>
              </div>
              
        </div>
                <!-- پیشنهاد شگفت انگیز -->
                <section class="products-section amazing">
                  <h2>پیشنهاد شگفت‌انگیز</h2>
                  <div class="products-grid">
                    <div class="product-card">
                      <img src="assets/images/JEP02 (7) (1).webp" alt="محصول ۱" class="img1">
                      <h3>آبمیوه گیری</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۳۵۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card">
                      <img src="assets/images/product2.jpg" alt="محصول ۲">
                      <h3>محصول ۲</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۲۷۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card">
                      <img src="assets/images/product3.jpg" alt="محصول ۳">
                      <h3>محصول ۳</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۴۲۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                  </div>
                </section>
              
                <!-- جدیدترین محصولات -->
                <section class="products-section newest">
                  <h2>جدیدترین محصولات</h2>
                  
                  <div class="products-grid">
                    <div class="product-card cart2 ">
                      <img src="assets/images/product4.jpg" alt="محصول ۴">
                      <h3>محصول ۴</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۳۰۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card cart2">
                      <img src="assets/images/product5.jpg" alt="محصول ۵">
                      <h3>محصول ۵</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۲۵۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card cart2">
                      <img src="assets/images/product6.jpg" alt="محصول ۶">
                      <h3>محصول ۶</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۳۸۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card cart2">
                      <img src="assets/images/product6.jpg" alt="محصول ۶">
                      <h3>محصول ۶</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۳۸۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    
                  </div>
                </section>
                <div class="beners">
                  <div class="bener1">
                    <a href="#"><img src="assets/images/bener1.jpg" alt="" class="bener-img"></a>
                  </div>
                  <div class="bener2">
                    <a href="#"><img src="assets/images/bener2.jpg" alt="" class="bener-img"></a>
                  </div>
                </div>
              </div>
                            
        </main>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/pages/main.js"></script>
</body>
</html>