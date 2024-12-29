document.addEventListener('DOMContentLoaded', function() {
    const notificationContainer = document.getElementById('notification-container');
    const notifications = JSON.parse(localStorage.getItem('notifications')) || [];

    if (notifications.length === 0) {
        notificationContainer.innerText = 'Tidak ada notifikasi.';
    } else {
        notifications.forEach((notification, index) => {
            // Format waktu menjadi: Hari, Tanggal Bulan Tahun Jam:Menit
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric', 
                hour: '2-digit', 
                minute: '2-digit', 
                hour12: false 
            };
            const timestamp = new Date(notification.timestamp).toLocaleString('id-ID', options); // Gunakan locale Indonesia

            const notificationElement = document.createElement('div');
            notificationElement.classList.add('notification-item');
            notificationElement.innerHTML = `
                <div class="notification-title">${notification.title}</div>
                <div class="notification-time">${timestamp}</div>
                <button class="delete-btn" data-index="${index}">&#10006;</button>
            `;
            notificationContainer.appendChild(notificationElement);
        });
    }

    notificationContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete-btn')) {
            const index = e.target.getAttribute('data-index');
            notifications.splice(index, 1);
            localStorage.setItem('notifications', JSON.stringify(notifications));
            location.reload();
        }
    });
});

