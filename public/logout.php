<?php
// pages/login.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // شبیه‌سازی موفقیت‌آمیز لاگین:
    $_SESSION['user_id'] = 123;
    $_SESSION['name'] = 'علی';
    $_SESSION['avatar'] = '/assets/images/user1.jpg'; // مسیر عکس تستی
    header('Location: /index.php'); exit;
}