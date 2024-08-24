document.addEventListener('DOMContentLoaded', function() {
    var sidebarMenu = document.getElementById('sidebarMenu');
    sidebarMenu.style.display = 'block'; // نمایش منو بعد از بارگذاری صفحه
    sidebarMenu.style.transform = 'translateX(-250px)'; // مخفی کردن منو ابتدا

    // تابع برای بستن منو
    function closeMenu() {
        sidebarMenu.style.transform = 'translateX(-250px)';
    }

    // کلیک بر روی بخش‌های دیگر صفحه
    document.addEventListener('click', function(event) {
        var targetElement = event.target; // المانی که بر روی آن کلیک شده است
        if (!sidebarMenu.contains(targetElement) && targetElement !== document.querySelector('.menu-button')) {
            // اگر کلیک خارج از منو و دکمه منو بود، منو را ببند
            closeMenu();
        }
    });
});

function toggleMenu() {
    var sidebarMenu = document.getElementById('sidebarMenu');
    if (sidebarMenu.style.transform === 'translateX(-250px)') {
        sidebarMenu.style.transform = 'translateX(0)';
    } else {
        sidebarMenu.style.transform = 'translateX(-250px)';
    }
}