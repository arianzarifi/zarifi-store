<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین | تغییر شماره تلفن</title>
    <link rel="stylesheet" href="assets/css/settings.css">
</head>
<body>
<div class="layout">
    <?php include 'includes/sidebar-admin.php'; ?> 
    <div class="main">
        <?php include 'includes/header-admin.php'; ?> 

        <div class="content">
            <h2>تغییر شماره تلفن فروشگاه</h2>

            <div class="settings-form">
    <form action="#" method="" id = "phoneForm">
        <div class="form-group">
            <label for="store-phone-1">شماره تلفن اصلی:</label>
            <input type="text" id="store-phone-1" name="store-phone-1" placeholder="مثال: 02112345678">
        </div>

        <div class="form-group">
            <label for="store-phone-2">شماره تلفن دوم:</label>
            <input type="text" id="store-phone-2" name="store-phone-2" placeholder="مثال: 02187654321">
        </div>

        <button type="submit" class="btn-save">ذخیره تغییرات</button>
    </form>
</div>


        </div>
    </div>
</div>

<script src="assets/js/pages/setting-phone.js"></script>
</body>
</html>
