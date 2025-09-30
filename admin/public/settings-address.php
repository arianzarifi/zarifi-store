<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین | تغییر آدرس</title>

    <link rel="stylesheet" href="assets/css/settings.css">
</head>
<body>
<div class="layout">
    <?php include 'includes/sidebar-admin.php'; ?> 
    <div class="main">
        <?php include 'includes/header-admin.php'; ?> 

        <div class="content">
            <h2>تغییر آدرس فروشگاه</h2>

            <div class="settings-form">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="store-address">آدرس جدید فروشگاه:</label>
                        <input type="text" id="store-address" name="store-address" placeholder="مثال: تهران، خیابان آزادی، پلاک ۱۲۳">
                    </div>

                    

                    <button type="submit" class="btn-save">ذخیره تغییرات</button>
                </form>
            </div>

        </div>
    </div>
</div>


</body>
</html>
