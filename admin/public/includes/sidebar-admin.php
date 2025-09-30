<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/sidebar-admin.css">
</head>
<body>
    <!-- سایدبار -->
    <div class="sidebar" id="sidebar">
      <div class="header-sidebar">
        <img src="assets/icons/icons8-avatar-48.png" alt="" class="avatar-img">
        <div class="header-sidebar-mtn">
          <h4 class = "head-sidebar">خوش آمدید </h4>
        <p class="paragraph-header-sidebar">مدیر سایت</p>
        </div>
      </div>
<ul>
<li class="menu-item" data-page="dashboard"><a href="index.php">داشبورد</a></li>
<li onclick="toggleSubmenu(this)">محصولات
<ul class="submenu">
<li class="menu-item" data-page="products"><a href="admin-products-list.php">لیست محصولات</a></li>
<li class="menu-item" data-page="manage-products"><a href="manage-products.php">مدیریت محصولات</a></li>
<li class="menu-item" data-page="manage-products"><a href="add-product.php">افزودن محصولات</a></li>
</ul>
</li>
<li onclick="toggleSubmenu(this)">سفارش‌ها
<ul class="submenu">
<li class="menu-item" data-page="new-orders"><a href="new-orders.php">سفارش‌های جدید</a></li>
<li class="menu-item" data-page="orders"><a href="orders-list.php">لیست سفارش‌ها</a></li>
</ul>
</li>
<li onclick="toggleSubmenu(this)">کاربران
<ul class="submenu">
<li class="menu-item" data-page="users"><a href="users-list.php">لیست کاربران</a></li>
</ul>
</li>
<li class="menu-item" data-page="reports"><a href="reports.php">گزارش‌ها</a></li>
<li onclick="toggleSubmenu(this)">تنظیمات
  <ul class="submenu">
  <li class="menu-item" data-page="users"><a href="settings-address.php">تغییر ادرس</a></li>
  <li class="menu-item" data-page="users"><a href="settings-phone.php">تغییر شماره تلفن</a></li>
  <li class="menu-item" data-page="users"><a href="admin-edit-banners.php">ویرایش بنر</a></li>
  <li class="menu-item" data-page="users"><a href="admin-slider-edit.php">تغییر اسلایدر</a></li>
  <li class="menu-item" data-page="users"><a href="edit-logo.php">تغییر لوگو</a></li>
</ul>
</div>

  <script src="assets/js/pages/sidebar-admin.js"></script>
</body>
</html>