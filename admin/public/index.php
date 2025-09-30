<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>پنل ادمین | ظریفی استور</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<body>
  <div class="layout">
    <?php include 'includes/sidebar-admin.php'; ?> 
    <div class="main">
    <?php include 'includes/header-admin.php'; ?> 
      <div class="content">
      <div class="stats-container">
  <div class="stat-box">
    <h3>کاربران فعال</h3>
    <p>1,250</p>
  </div>

  <div class="stat-box with-border">
    <h3>تعداد فروش</h3>
    <p>320</p>
  </div>

  <div class="stat-box with-border">
    <h3>کاربران جدید</h3>
    <p>85</p>
  </div>
</div>

      </div>

      <div class="charts">
    <!-- چارت فروش -->
    <div class="chart-box">
      <h2>فروش محصول (ماهانه)</h2>
      <canvas id="salesChart"></canvas>
    </div>

    <!-- چارت کاربران -->
    <div class="chart-box">
      <h2>تعداد کاربران (ماهانه)</h2>
      <canvas id="usersChart"></canvas>
     </div>
     </div>
    </div>
    <div class="tables-container">
  <!-- جدول آخرین سفارش‌ها -->
  <div class="table-box">
    <h3>آخرین سفارش‌ها</h3>
    <table>
      <thead>
        <tr>
          <th>مشتری</th>
          <th>مبلغ</th>
          <th>وضعیت</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>علی رضایی</td>
          <td>250,000</td>
          <td>پرداخت شده</td>
        </tr>
        <tr>
          <td>زهرا محمدی</td>
          <td>120,000</td>
          <td>در انتظار</td>
        </tr>
        <tr>
          <td>مهدی جعفری</td>
          <td>340,000</td>
          <td>لغو شده</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- جدول کاربران جدید -->
  <div class="table-box">
    <h3>کاربران جدید</h3>
    <table>
      <thead>
        <tr>
          <th>نام</th>
          <th>ایمیل</th>
          <th>تاریخ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>سارا احمدی</td>
          <td>sara@gmail.com</td>
          <td>1404/07/01</td>
        </tr>
        <tr>
          <td>حسین کریمی</td>
          <td>hossein@gmail.com</td>
          <td>1404/07/02</td>
        </tr>
        <tr>
          <td>مریم شریفی</td>
          <td>maryam@gmail.com</td>
          <td>1404/07/03</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

  </div>
  
</body>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

</body>
</html>
