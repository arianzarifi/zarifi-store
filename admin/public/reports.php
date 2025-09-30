<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین | گزارش‌ها</title>

    <link rel="stylesheet" href="assets/css/reports.css">
</head>
<body>
<div class="layout">
    <?php include 'includes/sidebar-admin.php'; ?> 
    <div class="main">
        <?php include 'includes/header-admin.php'; ?> 

        <div class="content">
            <h2>گزارش‌ها</h2>

            <!-- کارت‌های خلاصه -->
            <div class="reports-container">
                <div class="report-card">
                    <h3>تعداد محصولات</h3>
                    <p>120</p>
                </div>
                <div class="report-card">
                    <h3>تعداد کاربران</h3>
                    <p>350</p>
                </div>
                <div class="report-card">
                    <h3>کل سفارش‌ها</h3>
                    <p>220</p>
                </div>
                <div class="report-card">
                    <h3>درآمد کل</h3>
                    <p>85,000,000 تومان</p>
                </div>
            </div>

            <!-- جدول گزارش سفارش‌ها -->
            <div class="orders-report">
                <h3>وضعیت سفارش‌ها</h3>
                <table>
                    <thead>
                        <tr>
                            <th>وضعیت</th>
                            <th>تعداد</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>جدید</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>در حال پردازش</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>تکمیل شده</td>
                            <td>145</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>
