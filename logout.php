<?php
// فایل logout.php
session_start();
// اگر از سشن استفاده می‌کنید، آن را پاک کنید
// unset($_SESSION['user_id']);
// و سایر متغیرها و سشن‌های مربوط به کاربر را پاک کنید
session_unset();
// پایان سشن
session_destroy();
// انتقال به صفحه ورود
header("Location: index.php");
exit;
?>