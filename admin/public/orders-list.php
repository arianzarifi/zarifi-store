<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست سفارش‌ها | پنل ادمین</title>
    <link rel="stylesheet" href="assets/css/orders-list.css">
</head>
<body>
    <div class="layout">
        <?php include 'includes/sidebar-admin.php'; ?>
        <div class="main">
            <?php include 'includes/header-admin.php'; ?>

            <div class="content">
                <h2>لیست سفارش‌ها</h2>
                <div class="table-box">
                    <table>
                        <thead>
                            <tr>
                                <th>مشتری</th>
                                <th>آدرس</th>
                                <th>شماره تماس</th>
                                <th>محصول</th>
                                <th>تعداد</th>
                                <th>مبلغ</th>
                                <th>وضعیت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>علی رضایی</td>
                                <td>تهران، خیابان آزادی، پلاک 12</td>
                                <td>09121234567</td>
                                <td>کفش ورزشی</td>
                                <td>2</td>
                                <td>500,000 تومان</td>
                                <td>
                                    <select class="status-select">
                                        <option value="new">جدید</option>
                                        <option value="processing" selected>در حال پردازش</option>
                                        <option value="shipped">ارسال شد</option>
                                        <option value="completed">تکمیل شد</option>
                                        <option value="cancelled">لغو شد</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>زهرا محمدی</td>
                                <td>اصفهان، خیابان چهارباغ</td>
                                <td>09123456789</td>
                                <td>پیراهن</td>
                                <td>1</td>
                                <td>250,000 تومان</td>
                                <td>
                                    <select class="status-select">
                                        <option value="new">جدید</option>
                                        <option value="processing">در حال پردازش</option>
                                        <option value="shipped" selected>ارسال شد</option>
                                        <option value="completed">تکمیل شد</option>
                                        <option value="cancelled">لغو شد</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- سفارش‌های بیشتر -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


<script src="assets/js/pages/orders-list.js"></script>
</body>
</html>
