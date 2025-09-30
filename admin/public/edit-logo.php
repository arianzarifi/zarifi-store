<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تغییر لوگوی سایت</title>
  <link rel="stylesheet" href="assets/css/edit-logo.css">
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
        <h2>تغییر لوگوی سایت</h2>

        <form class="logo-form">
          <div class="logo-item">
            <label for="siteLogo">لوگوی سایت:</label>
            <input type="file" id="siteLogo" accept="image/*">
            <img id="logoPreview" class="logo-preview" src="assets/images/sample-logo.png" alt="پیش‌نمایش لوگو">
          </div>

          <button type="submit" class="btn-submit">ثبت تغییرات</button>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/pages/edit-logo.js"></script>
</body>
</html>
