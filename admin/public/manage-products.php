<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>مدیریت محصولات | ظریفی استور</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/manage-products.css">
</head>
<body>

<body>
  <div class="layout">
    <?php include 'includes/sidebar-admin.php'; ?> 
    <div class="main">
    <?php include 'includes/header-admin.php'; ?> 
      <div class="content">
        <h2>مدیریت محصولات</h2>

        <div class="mb-3">
          <a href="add-product.php" class="btn btn-primary">افزودن محصول جدید</a>
        </div>

        <!-- جدول محصولات -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ردیف</th>
              <th>نام محصول</th>
              <th>قیمت</th>
              <th>دسته بندی</th>
              <th>وضعیت</th>
              <th>عملیات</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>محصول اول</td>
              <td>1,200,000 تومان</td>
              <td>الکترونیک</td>
              <td><span class="badge bg-success">موجود</span></td>
              <td>
                <a href="edit-product.php?id=1" class="btn btn-warning btn-sm">ویرایش</a>
                <button class="btn btn-danger btn-sm" onclick="deleteProduct(1)">حذف</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>محصول دوم</td>
              <td>800,000 تومان</td>
              <td>لوازم خانگی</td>
              <td><span class="badge bg-danger">ناموجود</span></td>
              <td>
                <a href="edit-product.php?id=2" class="btn btn-warning btn-sm">ویرایش</a>
                <button class="btn btn-danger btn-sm" onclick="deleteProduct(2)">حذف</button>
              </td>
            </tr>
            <!-- سایر محصولات -->
          </tbody>
        </table>
      </div>

      </div>
  
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/pages/manage-products.js"></script>

</body>
</html>