<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>افزودن محصول جدید | پنل ادمین</title>
 
  <link rel="stylesheet" href="assets/css/add-product.css">
</head>
<body>
  <div class="layout">
    <!-- سایدبار -->
    <?php include 'includes/sidebar-admin.php'; ?>

    <div class="main">
      <!-- هدر -->
      <?php include 'includes/header-admin.php'; ?>

      <!-- محتوای صفحه -->
      <div class="content">
        <div class="container">
          <h2>افزودن محصول جدید</h2>
          <form action="add-product-handler.php" method="POST" enctype="multipart/form-data" class="product-form">
            
            <div class="form-group">
              <label for="name">نام محصول</label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
              <label for="price">قیمت (تومان)</label>
              <input type="number" id="price" name="price" required>
            </div>

            <div class="form-group">
              <label for="category">دسته‌بندی</label>
              <select id="category" name="category">
                <option value="electronics">خانه و آشپز خانه</option>
                <option value="clothes">لوازم خانگی</option>
                
              </select>
            </div>

            <div class="form-group">
              <label for="description">توضیحات</label>
              <textarea id="description" name="description" rows="4"></textarea>
            </div>

            <div class="form-group">
              <label for="image">تصویر محصول</label>
              <input type="file" id="image" name="image" accept="image/*">
            </div>

            <div class="form-actions">
              <button type="submit" class="btn-submit">افزودن محصول</button>
              <button type="reset" class="btn-reset">پاک کردن</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>
</html>
