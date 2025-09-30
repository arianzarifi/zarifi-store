<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>پنل ادمین | ظریفی استور</title>

<link rel="stylesheet" href="assets/css/admin-products-list.css">
</head>
<body>
  <div class="layout">
    <?php include 'includes/sidebar-admin.php'; ?> 
    <div class="main">
    <?php include 'includes/header-admin.php'; ?> 
      <div class="content">
      <h2>لیست محصولات</h2>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>نام محصول</th>
              <th>کد محصول</th>
              <th>قیمت (تومان)</th>
              <th>موجودی</th>
              <th>وضعیت</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>محصول نمونه 1</td>
              <td>PRD001</td>
              <td>150,000</td>
              <td>120</td>
              <td>موجود</td>
            </tr>
            <tr>
              <td>محصول نمونه 2</td>
              <td>PRD002</td>
              <td>200,000</td>
              <td>0</td>
              <td>ناموجود</td>
            </tr>
            <tr>
              <td>محصول نمونه 3</td>
              <td>PRD003</td>
              <td>120,000</td>
              <td>50</td>
              <td>موجود</td>
            </tr>
            <!-- نمونه محصولات بیشتر -->
          </tbody>
        </table>
      </div>
    </div>

  </div>
      </div>
      
  
</body>
</html>

