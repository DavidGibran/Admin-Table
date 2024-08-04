document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen notifikasi, overlay, dan tombol tutup
    const notification = document.getElementById('notification');
    const overlay = document.getElementById('overlay');
    const closeNotification = document.getElementById('close-notification');

    // Tampilkan notifikasi dan overlay saat halaman dimuat
    notification.style.display = 'block';
    overlay.style.display = 'block';

    // Tutup notifikasi dan overlay saat tombol diklik
    closeNotification.addEventListener('click', function() {
        notification.style.display = 'none';
        overlay.style.display = 'none';
    });

    // Tutup notifikasi dan overlay saat overlay diklik
    overlay.addEventListener('click', function() {
        notification.style.display = 'none';
        overlay.style.display = 'none';
    });
});