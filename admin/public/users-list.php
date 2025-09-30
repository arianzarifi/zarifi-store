<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست کاربران | پنل ادمین</title>
    <link rel="stylesheet" href="assets/css/users-list.css">
</head>
<body>
    <div class="layout">
        <?php include 'includes/sidebar-admin.php'; ?>
        <div class="main">
            <?php include 'includes/header-admin.php'; ?>

            <div class="content">
                <h2>لیست کاربران</h2>
                <div class="table-box">
                    <table>
                        <thead>
                            <tr>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>شماره تماس</th>
                                <th>تاریخ عضویت</th>
                                <th>نقش</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>علی رضایی</td>
                                <td>ali@gmail.com</td>
                                <td>09121234567</td>
                                <td>1403/05/12</td>
                                <td>
                                    <select class="role-select">
                                        <option value="user" selected>کاربر عادی</option>
                                        <option value="admin">مدیر</option>
                                        <option value="seller">فروشنده</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>زهرا محمدی</td>
                                <td>zahra@yahoo.com</td>
                                <td>09123456789</td>
                                <td>1403/06/01</td>
                                <td>
                                    <select class="role-select">
                                        <option value="user">کاربر عادی</option>
                                        <option value="admin" selected>مدیر</option>
                                        <option value="seller">فروشنده</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- کاربران بیشتر -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
<script src="assets/js/pages/users-list.js"></script>
</body>
</html>
