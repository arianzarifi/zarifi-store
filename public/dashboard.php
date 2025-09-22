<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی | ظریفی استور</title>
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/dashbord.css">

</head>
<body>
<header class="header">
        <div class="header-head">
            <div class="header-right">
                <img src="assets/images/logo.jpeg" alt="لوگو" class="logo">
                <div class="search-wrapper">
                    <input type="text" class="search-input" placeholder="جستجوی محصول...">
                    <button class="btn-search">جستجو</button>
                </div>       
            </div>
            <div class="header-left">
                <a href="#">لیست علاقه مندی</a>
                <a href="cart.php">سبد خرید</a>
                <div id="header-user-logged" class="header-user-logged" >
    <img src="assets/icons/avatar.png" alt="آواتار" id="user-avatar" class="avatar">
    <div id="user-menu" class="user-menu">
        <p id="user-name">کاربر شما</p>
        <ul>
            <li><a href="dashboard.php">داشبورد</a></li>
            <li><a href="#" id="logout-btn">خروج</a></li>
        </ul>
    </div>
</div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <nav class="category-menu">
                <ul>
                    <li class="category-item">
                        لوازم برقی
                        <ul class="subcategory">
                            <li><a href="">تلویزیون</a></li>
                            <li><a href="">یخچال</a></li>
                            <li><a href="">ماشین لباسشویی</a></li>
                        </ul>
                    </li>
                    <li class="category-item">
                        لوازم آشپزخانه
                        <ul class="subcategory">
                            <li><a href="">مایکروویو</a></li>
                            <li><a href="">ابمیوه گیری</a></li>
                            <li><a href="#">ظروف آشپزخانه</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            
            
        </div>
        
    </header>
    <script defer src="/assets/js/pages/header.js"></script>
</body>
</html>
    <!-- این فقط در داشبورد قرار می‌گیرد -->
<div id="header-user-logged" style="display:none;">
    <img src="assets/images/avatar.png" alt="آواتار" id="user-avatar" class="avatar">
    <div id="user-menu" class="user-menu" style="display:none;">
        <p id="user-name">کاربر شما</p>
        <ul>
            <li><a href="dashboard.php">داشبورد</a></li>
            <li><a href="#" id="logout-btn">خروج</a></li>
        </ul>
    </div>
</div>

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
                     <a href="product.php"> <img src="assets/images/JEP02 (7) (1).webp" alt="محصول ۱" class="img1"></a>
                      <h3>آبمیوه گیری</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۳۵۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card">
                     <a href="product.php"> <img src="assets/images/product2.jpg" alt="محصول ۲"></a>
                      <h3>محصول ۲</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۲۷۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                    <div class="product-card">
                      <a href="product.php"><img src="assets/images/product3.jpg" alt="محصول ۳"></a>
                      <h3>محصول ۳</h3>
                      <p>توضیح کوتاه محصول</p>
                      <span class="price">۴۲۰,۰۰۰ تومان</span>
                      <button class="btn-add">افزودن به سبد</button>
                    </div>
                  </div>
                </section>
              
                <!-- جدیدترین محصولات -->
                <section class="products-section newest">
                  <div class = "title-newest">
                  <h2>جدیدترین محصولات</h2>
                  <a href="products.php">محصولات بیشتر</a>
                  </div>
                  
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
    <script src="assets/js/pages/dashbord.js"></script>
</body>
</html>