<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ویرایش اسلایدر</title>
  <link rel="stylesheet" href="assets/css/sidebar-admin.css">
  <link rel="stylesheet" href="assets/css/header-admin.css">
  <link rel="stylesheet" href="assets/css/admin-slider-edit.css">
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
        <h2>ویرایش اسلایدر</h2>

        <form class="slider-form">
          <div class="slide-item">
            <label for="slide1">اسلاید شماره ۱:</label>
            <input type="file" id="slide1" accept="image/*">
            <img id="preview1" class="slide-preview" src="assets/images/sample-slide1.jpg" alt="پیش‌نمایش اسلاید">
          </div>

          <div class="slide-item">
            <label for="slide2">اسلاید شماره ۲:</label>
            <input type="file" id="slide2" accept="image/*">
            <img id="preview2" class="slide-preview" src="assets/images/sample-slide2.jpg" alt="پیش‌نمایش اسلاید">
          </div>

          <div class="slide-item">
            <label for="slide3">اسلاید شماره ۳:</label>
            <input type="file" id="slide3" accept="image/*">
            <img id="preview3" class="slide-preview" src="assets/images/sample-slide3.jpg" alt="پیش‌نمایش اسلاید">
          </div>

          <button type="submit" class="btn-submit">ثبت تغییرات</button>
        </form>
      </div>
    </div>
  </div>

  <script src = "assets/js/pages/edit-slider.js"></script>
</body>
</html>
