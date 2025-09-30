<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ویرایش بنرها</title>
  <link rel="stylesheet" href="assets/css/edit-banners.css">
</head>
<body>
  <div class="layout">
    <!-- سایدبار -->
    <?php include 'includes/sidebar-admin.php'; ?> 

    <!-- بخش اصلی -->
    <div class="main">
      <!-- هدر -->
      <?php include 'includes/header-admin.php'; ?> 

      <!-- محتوای صفحه -->
      <div class="content">
        <h2>ویرایش بنرهای سایت</h2>

        <form class="banner-form">
          <div class="banner-item">
            <label for="banner1">بنر شماره ۱:</label>
            <input type="file" id="banner1" accept="image/*">
            <img id="preview1" class="banner-preview" src="assets/images/sample-banner1.jpg" alt="پیش‌نمایش بنر">
          </div>

          <div class="banner-item">
            <label for="banner2">بنر شماره ۲:</label>
            <input type="file" id="banner2" accept="image/*">
            <img id="preview2" class="banner-preview" src="assets/images/sample-banner2.jpg" alt="پیش‌نمایش بنر">
          </div>

          <div class="banner-item">
            <label for="banner3">بنر شماره ۳:</label>
            <input type="file" id="banner3" accept="image/*">
            <img id="preview3" class="banner-preview" src="assets/images/sample-banner3.jpg" alt="پیش‌نمایش بنر">
          </div>

          <button type="submit" class="btn-submit">ثبت تغییرات</button>
        </form>
      </div>
    </div>
  </div>

  <script src = assets/js/pages/edit-beners.js></script>
</body>
</html>
